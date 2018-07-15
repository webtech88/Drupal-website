define('site', ['jquery', 'nebula/viewport', 'nebula/smart_blocks', 'detect', 'fader', 'image_loader'], function(jQuery, viewport, smartBlocks, detect, Fader, imageLoader) {
    'use strict';

    function Site() {
        viewport.enable();
        smartBlocks.enable();
        jQuery(window).resize(this.updateHeight.bind(this));
        jQuery.datepicker.setDefaults({
            'onSelect': function() {
                jQuery(this).blur();
            },
            'dateFormat': 'dd/mm/yy',
            'minDate': 0,
            'maxDate': '+1Y'
        });
        this.mapsAPILoaded = false;
        this.maps = [];
        jQuery(window).resize(this.parseContent(this));
        this.parseContent(document.body);
        this.updateHeight();
    }

    Site.prototype.updateHeight = function() {
        var body = jQuery(document.body);
        var main = jQuery('main');
        var pageColumn = main.find('>.page-column');
        var pageContent = jQuery('.page-content');
        var menu = jQuery('.main-menu');

        menu.css('bottom', '');
        pageColumn.css({'margin-top': '', 'margin-bottom': ''});

        var a = 0;
        if (body.hasClass('mobile')) {
            a = jQuery('.page-header').outerHeight() + jQuery('.page-footer').outerHeight();
        }

        var d = Math.max(0, body.outerHeight() - main.outerHeight() - a);

        if (pageColumn.hasClass('vertical-middle')) {
            d = Math.floor(d / 2);
            pageColumn.css('margin-bottom', d);
        }

        if (pageContent.length) {
            pageContent.css('margin-top', 0);
            var margin = window.innerHeight;

            if (body.hasClass('desktop'))
                margin = jQuery('.page-footer').offset().top - body.scrollTop() - jQuery('html').scrollTop();

            var hr = pageContent.find('hr').first();
            if (hr.length) {
                if (hr.next().length)
                    margin -= hr.next().offset().top;
                else
                    margin -= hr.offset().top + 50;
            }
            else
                margin -= pageContent.offset().top + 150;

            pageContent.css('margin-top', Math.max(0, margin));
        }

        menu.css('bottom', jQuery('.page-footer').outerHeight());
        pageColumn.css('margin-top', d);
    };

    Site.prototype.onMapsAPILoaded = function() {
        delete window.onMapsAPILoaded;

        this.mapsAPILoaded = true;

        for (var i = 0; i < this.maps.length; i++)
            this.parseContent(this.maps[i]);
    };

    Site.prototype.loadMapsAPI = function() {
        window.onMapsAPILoaded = this.onMapsAPILoaded.bind(this);

        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&callback=onMapsAPILoaded';
        document.body.appendChild(script);
    };

    Site.prototype.parseContent = function(root) {
        var site = this;

        function find(selector) {
            return jQuery(root).is(selector) ? jQuery(root) : jQuery(root).find('*').filter(selector);
        }

        find('input').placeholder();
        find('.scrollable').scrollbar();

        var checkIn = find('.datepicker:eq(0)');
        var checkOut = find('.datepicker:eq(1)');
        checkIn.datepicker({
            'onClose': function(date, obj) {
                var start = obj.input.datepicker('getDate'),
                    end = obj.input.datepicker('getDate');
                start.setDate(start.getDate() + 1);
                end.setDate(end.getDate() + 30);
                checkOut.datepicker('option', {
                    'minDate': start,
                    'maxDate': end
                });
            }
        });
        checkOut.datepicker();

        find('.book-form form').on('submit', function() {
            checkIn.datepicker('option', {
                'dateFormat': 'mm/dd/yy'
            });
            checkOut.datepicker('option', {
                'dateFormat': 'mm/dd/yy'
            });
            if (typeof _gaq !== 'undefined')
                _gaq.push(['_linkByPost', this]);
        });

        find('#OT_form input.datepicker').datepicker();

        find('.page-header').each(function() {
            var header = jQuery(this);
            var body = jQuery(document.body);

            function toggleMenu() {
                body.toggleClass('menu-mobile-active');
            }

            function toggleBookForm() {
                body.toggleClass('book-form-active');
            }

            jQuery('<button class="button menu-toggle icon-menu"/>').appendTo(header).click(toggleMenu);
            jQuery('<button class="button book-form-toggle icon-book"/>').appendTo(header).click(toggleBookForm);
        });

        find('body').each(function() {
            var body = jQuery(this);

            function update() {
                if (viewport.is('320 480 720 960'))
                    body.addClass('mobile');
                else
                    body.removeClass('mobile');
            }

            update();
            viewport.onChange.connect(update);
        });

        find('.gallery-fader').each(function() {
            var element = jQuery(this);
            var images = element.find('.gallery-images');
            var fader = new Fader(images, {'auto': false});
            var previous = element.find('.fader-previous').text('');
            var next = element.find('.fader-next').text('');
            var caption = element.find('.gallery-item-caption');
            var itemIndex = element.find('.gallery-item-index');

            function update() {
                itemIndex.text((fader.activeIndex + 1) + '/' + fader.items.length);
                caption.text(images.find('figcaption').eq(fader.activeIndex).text());
                images.find('>ul').css('height', jQuery(fader.items[fader.activeIndex]).outerHeight());
            }

            viewport.onChange.connect(update);
            fader.onChange.connect(update);
            fader.onChange.connect(imageLoader.updateAll);

            previous.click(fader.previous.bind(fader));
            next.click(fader.next.bind(fader));

            update();
        });

        find('.map').each(function() {
            var mapContainer = jQuery(this);
            var pageColumn = jQuery('.page-column');
            var pageContent = pageColumn.find('.page-content');

            if (!site.mapsAPILoaded) {
                site.maps.push(this);
                site.loadMapsAPI();
                return;
            }

            pageColumn.css('pointer-events', 'none');
            pageContent.css('pointer-events', 'all');

            var center = new google.maps.LatLng(Number(mapContainer.data('lat')), Number(mapContainer.data('lng')));

            var map = new google.maps.Map(this, {
                zoom: Number(mapContainer.data('zoom')),
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDoubleClickZoom: false,
                draggable: true,
                disableDefaultUI: true,
                scrollwheel: false
            });

            var marker = new google.maps.Marker({
                position: center,
                animation: google.maps.Animation.DROP,
                map: map,
                icon: mapContainer.attr('data-marker')
            });

            var update = function() {
                map.setCenter(center);

                var x = -pageContent.outerWidth() / 2;
                var y = 0;

                if (viewport.is('960')) {
                    x += 200;
                    y += 180;
                } else if (viewport.is('720')) {
                    x += viewport.width() * 0.1;
                    y += viewport.width() * 0.125;
                } else if (viewport.is('480')) {
                    x += viewport.width() * 0.1;
                } else if (viewport.is('320')) {
                    x = -viewport.width() * 0.4;
                }

                map.panBy(x, y);
            };

            update();
            jQuery(window).on('resize', update);
        });

        find('.desktop .home-thumbnails').each(function() {
            var element = jQuery(this);
            var scrollable = element.find('.scrollable');

            var update = function(event) {
                var x = event.pageX - element.offset().left - 100;
                var p = Math.max(0, Math.min(x / (element.outerWidth() - 200), 1));
                var left = (scrollable[0].scrollWidth - element.outerWidth()) * p;
                scrollable.scrollLeft(left);
            };

            element.on('mousemove', update);
        });

        find('.image-link a').on('click', function(e) {
            e.stopPropagation();
        });

        find('.image-link').on('click', function() {
            jQuery(this).find('a')[0].click();
        });

	/* not sure what this does in regard to google analytics - Alex */
        find('[data-ga-category]').on('click', function() {
            if (typeof _gaq === 'undefined')
                return;

            var a = jQuery(this);
	   
	    /* do not add to Twitter link */
	    if(a.hasClass('icon-twitter')) {
		return;
	    }
            _gaq.push([
                '_trackEvent',
                a.data('gaCategory'),
                a.data('gaAction'),
                a.data('gaLabel')
            ]);
        });

        find('span.time').each(function() {
            var span = jQuery(this);
            var updateTime = function() {
                var date = new Date;
                var hour = date.getHours();
                var minute = date.getMinutes();
                var hour_class = 'hour-' + (hour > 9 ? hour : ('0' + hour));
                var minute_class = 'minute-' + (minute > 9 ? minute : ('0' + minute));
                span
                    .attr('class', ['time', hour_class, minute_class].join(' '))
                    .html(
                        (hour > 12 ? (hour - 12) : hour) + ':' +
                        (minute > 9 ? minute : ('0' + minute)) + ' ' +
                        (hour < 12 ? 'AM' : 'PM')
                    );
            };
            setInterval(updateTime, 60 * 1000);
            updateTime();
        });

	/* adds Google Analytics tracking info to links - - Alex */
        find('a[href^="http://"], a[href^="https://"]').on('click', function(e) {
            if (typeof _gaq === 'undefined')
                return;

            var a = this;

	    /* do not use tracking on Twitter link in footer */
            if(jQuery(a).hasClass('icon-twitter')) {
                return;
            }

            e.preventDefault();
            _gaq.push(['_setAllowLinker', true]);
            _gaq.push(function() {
                if (a.target == '_blank')
                    window.open(_gat._getTrackers()[0]._getLinkerUrl(a.href));
                else
                    _gaq.push(['_link', a.href]);
            });
        });

        smartBlocks.updateTree(root);

        // Fix for android. These elements are initially hidden in CSS.
        jQuery('.main-menu, .book-form').show();
    };

    return Site;
});

if(jQuery) jQuery(document).ready(function($) {
	if($("#popup").length > 0) {
		function resize_modal(){
			var height = $('#popup').outerHeight(true);
			height += 2 * parseInt($('#simplemodal-container').css('padding-top'), 10) + 2 * parseInt($('#simplemodal-container').css('border-top'), 10);

			if(height > $(window).height()){
				height = $(window).height();
			}
			$('#simplemodal-container').css({'height': height });
			hc = ($(window).height()/2) - ($('#simplemodal-container').outerHeight(true)/2),
			st = $('#simplemodal-container').css('position') !== 'fixed' ? wndw.scrollTop() : 0;
			$('#simplemodal-container').css({'top': hc + st });
		}
		$("#popup").modal({
			autoResize: true,
			containerCss:{height: 'auto'},
			onShow: function() {
				setTimeout(function() {
					resize_modal();
				}, 100);
			}
		});
		$(window).resize(function() {
			resize_modal();
		});
	}
});

// bookable widget

(function() {
    var interval = setInterval(function() {
        if (typeof jQuery == 'undefined')
            return;

        clearInterval(interval);

        jQuery.lbuiDirect = jQuery.fn.lbuiDirect = window.lbuiDirect;

        jQuery(function() {
            jQuery('#bookatable').lbuiDirect({
                connectionid:  "UK-RES-STUDIOKITCHENATKWESTHOTELANDSPA_286156:70987",
                modalWindow: {
                    enabled: true
                }
            });
        });
    }, 10);
})();



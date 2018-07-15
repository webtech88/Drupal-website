define('image_loader', ['jquery', 'nebula/viewport', 'detect'], function(jQuery, viewport, detect) {
    var oldIE = detect.browser.ie && detect.browser.version < 9;
    function update() {
        var image = jQuery(this);
        var parent = image.parent();

        if (parent.is('figure')) {
            var width = parseInt(image.attr('width'), 10);
            var height = parseInt(image.attr('height'), 10);

            if (!width || !height)
                throw new Error((image.attr('src') || image.data('src')) + ' - image width or height attribute is missing');
            else {
                var placeholder = parent.find('.image-placeholder');

                if (!placeholder.length)
                    placeholder = jQuery('<span class="image-placeholder"/>').insertBefore(image);

                placeholder.css('padding-bottom', (100 * height / width) + '%');
            }
        }

        if (!oldIE) {
            // to do animate styles only for single image
            if(!image.parents('.owl-carousel').length){
                if (image.attr('src') || image.is(':hidden'))
                    return;

                parent.addClass('loading');
                image.css('opacity', 0);
                image.load(function() {
                    image.animate({'opacity': 1}, 500, function() {
                        parent.removeClass('loading');
                    });
                });
            }
        }

        image.attr('src', image.attr('data-src'));
    };

    function updateAll() {
        jQuery('img').each(update);
    }

    // Load images after ajax pulls in new posts
    Drupal.behaviors.load_images = {
      attach: function(context, settings) {
         updateAll();
      }
    };

    viewport.onChange.connect(updateAll);

    return {
        'update': update,
        'updateAll': updateAll
    };
});

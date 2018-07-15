define('fader', ['jquery', 'nebula/signal', 'settings'], function(jQuery, Signal, settings) {

    function Fader(element, kwargs) {
        var htmlSettings = {};

        if (element.data('settings'))
            htmlSettings = settings(element.data('settings'), {});

        jQuery.extend(true, this, Fader.DEFAULT_SETTINGS, htmlSettings, kwargs);

        this.element = element;
        this.items = element.find('>*>li');
        this.timer = null;
        this.onChange = new Signal();

        if (this.auto)
            this.timer = setTimeout(this.next.bind(this), this.duration);
    }

    Fader.DEFAULT_SETTINGS = {
        'auto': true,
        'duration': 5000,
        'animationTime': 500,
        'activeIndex': 0,
        'loop': true
    };

    Fader.prototype.activateItem = function(index) {
        var self = this;

        if (this.timer)
            clearTimeout(this.timer);

        this.activeIndex = index;

        this.items.removeClass('active');
        this.items.eq(index).nextAll().stop(true).animate({'opacity': 0}, this.animationTime, function() {
            jQuery(this).css('visibility', 'hidden');
        });

        this.items.eq(index).addClass('active').stop(true).css('visibility', 'visible').animate({'opacity': 1}, this.animationTime, function() {
            jQuery(this).prevAll().css({'opacity': 1, 'visibility': 'hidden'});

            if (self.auto) {
                clearTimeout(self.timer);
                self.timer = setTimeout(self.next.bind(self), self.duration);
            }
        });

        this.onChange.send(this);
    };

    Fader.prototype.previous = function() {
        if (this.loop)
            this.activateItem((this.activeIndex + this.items.length - 1) % this.items.length);
        else
            this.activateItem(Math.max(0, this.activeIndex - 1));
    };

    Fader.prototype.next = function() {
        if (this.loop)
            this.activateItem((this.activeIndex + 1) % this.items.length);
        else
            this.activateItem(Math.min(this.items.length - 1, this.activeIndex + 1));
    };

    Fader.prototype.isFirst = function() {
        return this.activeIndex == 0;
    };

    Fader.prototype.isLast = function() {
        return this.activeIndex == this.items.length - 1;
    };

    Fader.handler = function() {
        var element = jQuery(this);
        if (element.find('>ul>li').length < 2)
            return;

        var fader = new Fader(element, {});

        Fader.addNavigation(element, fader);
    };

    Fader.addNavigation = function(element, fader) {
        if (element.find('>ul>li').length < 2)
            return;

        var navigation = jQuery('<nav><p/></nav>').css('z-index', fader.items.length).appendTo(element).find('p');

        function onClick(event) {
            event.preventDefault();
            fader.activateItem(jQuery(this).index());
        }

        function onChange() {
            navigation.children().eq(fader.activeIndex).addClass('active').siblings().removeClass('active');
        }

        for (var i = 0; i < fader.items.length; i++)
            jQuery('<button/>').click(onClick).appendTo(navigation);

        fader.onChange.connect(onChange);
        fader.activateItem(0);
    };

    return Fader;
});

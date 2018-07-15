/*
 * Responsive images
 */
define('media_set', ['jquery', 'nebula/viewport'], function(jQuery, viewport) {
    function update() {
        var script = jQuery(this);
        var contents = jQuery(jQuery.trim(script.text() || script.html())).filter('*');
        var element = null;

        script.nextAll('img').detach();
        script.nextAll('a').detach();

        contents.each(function() {
            var viewports = jQuery(this).attr('data-viewports');
            var is_fallback = typeof jQuery(this).attr('data-fallback') !== 'undefined';

            if ((viewports && viewport.is(viewports, viewports.indexOf('viewport-') > -1)) || is_fallback) {
                element = jQuery(this);
                return false;
            }
        });

        if (element)
            element.insertAfter(script);
    }

    function updateAll() {
        jQuery('script[type="image/media-set"]').each(update);
    }

    viewport.onChange.connect(updateAll);

    return {
        'updateAll': updateAll,
        'update': update
    };
});

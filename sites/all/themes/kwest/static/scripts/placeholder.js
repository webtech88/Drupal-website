/*
 * Handle default text
 *
 * Plugin hides/shows placeholder text on input elements, by toggling class
 * "placeholder-visible".
 *
 * Also, script handles dimension changes, so placeholder has the same width
 * and height as the input element.
 *
 * HTML requirements:
 *      labels (or their parents) with class "placeholder"
 *
 * Usage:
 *      jQuery('input').placeholder();
 *
 * Requires:
 *      /javascript/jquery/labels.js
 */
(function(jQuery) {
    jQuery.fn._placeholderCheck = function() {
        return this.each(function() {
            var element = jQuery(this);
            var labels = element.labels('.placeholder');

            if (element.is('textarea')) {
                labels.addClass('placeholder-textarea');
                labels.css('height', element.outerHeight());
            }

            labels.css('width', element.outerWidth());

            if (!element.val())
                labels.addClass('placeholder-visible');
            else
                labels.removeClass('placeholder-visible');
        });
    };

    jQuery.fn.placeholder = function() {
        return this.each(function() {
            var element = jQuery(this);
            var labels = element.labels('.placeholder');
            var form = element.closest('form');
            var updateTimer = null;

            var formUpdate = function() {
                form.find('input,textarea,select')._placeholderCheck();
            };

            element.on('keyup', formUpdate);
            element.focus(function() {
                element.addClass('focus');
                formUpdate();
                updateTimer = setInterval(formUpdate, 100);
            }).blur(function() {
                clearInterval(updateTimer);
                formUpdate();
                element.removeClass('focus');
            });

            // iOS 5 fix.
            labels.click(function() {});

            jQuery(formUpdate);
        });
    };
}(require('jquery')));

/*
 * Get all labels associated with the given form fields.
 */
(function(jQuery) {
    jQuery.fn.labels = function(selector) {
        var labels = jQuery();

        this.each(function() {
            var field = jQuery(this), id = field.attr('id');
            if (id)
                labels = labels.add('label[for="' + id + '"]');
            labels = labels.add(field.closest('label'));
        });

        if (selector)
            labels = labels.filter(selector);

        return labels;
    };
}(require('jquery')));

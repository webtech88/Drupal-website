/*
 * Shortcut for managing many files. Please don't use this file on a live site due to performance implications.
 * Instead merge the files below to a single JavaScript file manually or using your backend technology.
 */
(function() {
    'use strict';

    var paths = [
        'scripts/polyfills.js',  // Mostly IE8 support, skip or remove if targeting IE9+.
        'scripts/nebula/require.js',
        'scripts/settings.js',
        'scripts/nebula/utils/callable.js',
        'scripts/nebula/signal.js',
        'scripts/libs/jquery.js',
        'scripts/nebula/viewport.js',
        'scripts/nebula/smart_blocks.js',

        // Put own scripts here.

        'scripts/jquery_ui.js',
        'scripts/labels.js',
        'scripts/placeholder.js',
        'scripts/detect.js',
        'scripts/safe_on.js',
        'scripts/scrollbar.js',
        'scripts/fader.js',
        'scripts/media_set.js',
        'scripts/image_loader.js',
        'scripts/site.js',
        'scripts/nebula/main.js'
    ];

    document.write('<script src="' + paths.join('"></script>\n<script src="') + '"></script>');
})();

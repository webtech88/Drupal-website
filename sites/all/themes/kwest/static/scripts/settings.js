/*
 * Put global configuration options here.
 */
define('settings', {
    // Enable or disable jQuery 'no conflict' mode. Defaults to `true`.
    'JQUERY_NO_CONFLICT': true,

    'VIEWPORTS': {
        '320': [0, 479],
        '480': [480, 719],
        '720': [720, 959],
        '960': [960, 1279],
        '1280': [1280, 1599],
        '1600': [1600, 1919],
        '1920': [1920, Infinity]
    },
    // Uncomment this to disable 'viewport-portrait' and 'viewport-landscape' classes added automatically to body.
    // 'VIEWPORT_ORIENTATION_CLASS': false,

    'SMART_BLOCKS': {
        '.v480-rtl': {
            'rtl': '480'
        },
        '.sidebar-image': {
            'triangle-top': '720 960 1280 1600 1920'
        },
        ':not(.v480-rtl)>*>.tile-image-left': {
            'triangle-bottom': '320',
            'triangle-right': '480 720 960 1280 1600 1920'
        },
        '.v480-rtl>*>.tile-image-left': {
            'triangle-bottom': '320',
            'triangle-left': '480',
            'triangle-right': '720 960 1280 1600 1920'
        },
        '.gallery-items:not(.no-triangle)': {
            'triangle-left': '720 960 1280 1600 1920',
            'triangle-bottom': '320 480'
        },
        '.gallery-fader': {
            'small': '320 480',
            'big': '720 960 1280 1600 1920'
        },
        '.home-special-tile': {
            'move-up': '720 960 1280 1600 1920'
        },
        '.page-footer p': {
            'text-center': '320 480 720 960'
        },
        '.page-footer ul': {
            'text-center': '320 480 720 960'
        },
        '.image-link': {
            'tiny-text': [0, 419, 'self'],
            'small-text': [420, 569, 'self'],
            'button-below': [0, 622, 'self']
        }
    }
});

const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                ...defaultTheme.colors,
                'primary': '#0061FF',
                'secondary': '#FFA959',
                'primary-light': '#F7FAFF',
                'secondary-light': 'rgba(255, 168, 89, 0.3)',
                'dark': '#2A2A2B',
                'dark-gray': '#515559',
                'light-gray': '#8B8B8C'
            },
            boxShadow: {
                'button-primary': '8px 8px 10px rgba(82, 113, 255, 0.3)',
                'card-article': '4px 4px 40px rgba(206, 206, 206, 0.4)'
            },
            fontFamily: {
                'sans': ['Roboto', 'sans-serif'],
            },
            fontSize: {
                'jumbotron-heading': ['65px', {
                    lineHeight: '70px',
                    fontWeight: '700',
                }],
                'jumbotron-paragraph': ['22px', {
                    lineHeight: '34px',
                    fontWeight: '400'
                }],
                'btn': ['18px', {
                    lineHeight: '22px',
                    fontWeight: '600'
                }],
                'nav-link': ['18px', {
                    lineHeight: '21px',
                    fontWeight: '500'
                }],
                'section-header': ['35px', {
                    lineHeight: '41px',
                    fontweight: '500'
                }],
                'section-paragraph': ['22px', {
                    lineHeight: '34px',
                    fontWeight: '400'
                }],
                'paragraph': ['18px', {
                    lineHeight: '28px',
                    fontWeight: '400'
                }],
                'content-heading': ['25px', {
                    lineHeight: '35px',
                    fontWeight: '500'
                }],
                'content-date': ['18px', {
                    lineHeight: '35px',
                    fontWeight: '500'
                }],
                'content-paragraph': ['16px', {
                    lineHeight: '25px',
                    fontWeight: '400'
                }],
                'btn-more': ['14px', {
                    lineHeight: '35px',
                    fontWeight: '500'
                }],
                'mb-jumbotron-heading': ['48px', {
                    lineHeight: '50px',
                    fontWeight: '700'
                }],
                'mb-jumbotron-paragraph': ['21px', {
                    lineHeight: '28px',
                    fontWeight: '400'
                }],
                'mb-section-header': ['35px', {
                    lineHeight: '44px',
                    fontweight: '500'
                }],
                'mb-section-paragraph': ['18px', {
                    lineHeight: '34px',
                    fontweight: '400'
                }],
                'mb-content-heading': ['24px', {
                    lineHeight: '35px',
                    fontweight: '500'
                }],
                'mb-paragraph': ['18px', {
                    lineHeight: '28px',
                    fontweight: '400'
                }],
                'mb-content-date': ['18px', {
                    lineHeight: '35',
                    fontweight: '500'
                }],
                'mb-content-paragraph': ['16px', {
                    lineHeight: '28px',
                    fontweight: '400'
                }],
                'mb-btn-more': ['18px', {
                    lineHeight: '35px',
                    fontweight: '500'
                }],
                'mb-content-heading-small': ['18px', {
                    lineHeight: '22px',
                    fontweight: '500'
                }],
                'mb-content-paragraph-small': ['12px', {
                    lineHeight: '18px',
                    fontweight: '400'
                }],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],
};

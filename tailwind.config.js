const plugin = require('tailwindcss/plugin')
const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
  mode: 'jit',
  purge: [
    './index.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
        'green-600-smkplusa': '#00923F',
        transparent: 'transparent',
        current: 'currentColor',

        black: colors.black,
        white: colors.white,

        gray: colors.coolGray,
        red: colors.red,
        orange: colors.orange,
        yellow: colors.yellow,
        green: colors.emerald,
        teal: colors.teal,
        blue: colors.blue,
        indigo: colors.indigo,
        purple: colors.purple,
        pink: colors.pink,
      },

    extend: {
      fontFamily: {
        sans: [
          'Inter',
          ...defaultTheme.fontFamily.sans,
        ]
      },
      colors: {
        'sidebar-dark': '#313947',
        'sidebar-light': '#ffffff',
      },
      cursor: {
        'resize-x': 'ew-resize',
      },
      maxWidth: {
        '8xl': '90rem',
        '9xl': '105rem',
        '10xl': '120rem',
      },
      zIndex: {
        '1': 1,
        '60': 60,
        '70': 70,
        '80': 80,
        '90': 90,
        '100': 100,
      },
      typography: {
        DEFAULT: {
          css: {
            a: {
              textDecoration: 'none',
              '&:hover': {
                opacity: '.75',
              },
            },
            img: {
              borderRadius: defaultTheme.borderRadius.lg,
            },
          },
        },
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ['active'],
      backgroundOpacity: ['active'],
      borderColor: ['active'],
      boxShadow: ['active'],
      opacity: ['active'],
      rotate: ['active', 'group-hover'],
      saturate: ['hover', 'focus', 'group-hover', 'group-focus'],
      scale: ['active', 'group-hover'],
      textColor: ['active'],
      zIndex: ['hover', 'active'],  
    },
  },
  plugins: [
    // require('@tailwindcss/aspect-ratio'),
    // require('@tailwindcss/forms'),
    // require('@tailwindcss/typography')(),
  ],
}

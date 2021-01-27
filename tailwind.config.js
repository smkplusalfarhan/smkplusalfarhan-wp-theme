module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    extend: {
      colors: {
        'green-600-smkplusa': '#00923F',
      },
      spacing: {
        '72': '18rem',
        '84': '21rem',
        '96': '24rem',
      },
      screens: {
      'xl': '1367px',
    },
    },
    minHeight: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        'full': '100%',
      },
  },
  variants: {
    position: ['responsive', 'hover', 'focus'],
    animation: ['responsive', 'hover', 'focus'],
  },
  plugins: [],
}

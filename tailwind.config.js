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
    },
  },
  variants: {
    position: ['responsive', 'hover', 'focus'],
    animation: ['responsive', 'hover', 'focus'],
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

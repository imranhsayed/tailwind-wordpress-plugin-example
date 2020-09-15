module.exports = {

  // @see https://tailwindcss.com/docs/upcoming-changes
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true
  },
  purge: {
    content: ['./assets/src/js/*.js'],
    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
  },
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
}

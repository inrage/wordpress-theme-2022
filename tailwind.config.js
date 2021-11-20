module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.{php,vue,js}',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    spacing: () => {
      const start = 0;
      const end = 21;
      const obj = {};
      const numbers = Array.from({length: (end - start)}, (v, k) => k + start);

      numbers.forEach((number) => {
        obj[number] = `calc(${number} * var(--space))`;
      });

      return obj;
    },
    extend: {
      colors: {},
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
  corePlugins: {
    container: false,
  },
};

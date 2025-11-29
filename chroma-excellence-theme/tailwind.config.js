/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './inc/**/*.php',
    './template-parts/**/*.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Outfit', 'system-ui', 'sans-serif'],
        serif: ['Playfair Display', 'ui-serif', 'Georgia', 'serif'],
      },
      colors: {
        brand: {
          ink: '#263238',
          cream: '#FFFCF8',
          navy: '#4A6C7C',
        },
        chroma: {
          red: '#A84B38', // Darkened from #D67D6B for 4.5:1 contrast
          redLight: '#F4E5E2',
          orange: '#C26524', // Darkened from #E89654 for 4.5:1 contrast
          orangeLight: '#FEF0E6',
          blue: '#4A6C7C',
          blueDark: '#2F4858',
          blueLight: '#E3E9EC',
    },
  },
  safelist: [
    // Pulse animation classes for status indicators
    'animate-pulse',
    'w-2',
    'h-2',
    'bg-chroma-green',
    'bg-chroma-blue',
    'rounded-full',
  ],
  plugins: [],
};

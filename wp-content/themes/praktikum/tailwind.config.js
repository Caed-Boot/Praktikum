/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}',
  "./node_modules/flowbite/**/*.js",
  ],
            
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
      animation: {
        fade: 'fadeIn .5s ease-in',
      },
      fontFamily: {
        'crimson': ['Crimson Pro', 'sans-serif'],
      },
      keyframes: {
        fadeIn: {
          from: { opacity: 0 },
          to: { opacity: 1 },
        },
      },
      transitionProperty: {
        'height': 'height',
      },
    },

  },
  plugins: [
    require('flowbite/plugin')
  ],
};


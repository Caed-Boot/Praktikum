/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php',
     './resources/**/*.{php,vue,js}',
    ],
  theme: {
    extend: {

      colors: {
        'turquoise': '#00a1aa',
        'gray': '#383c47',
      }
       // Extend Tailwind's default colors
    },

    fontWeight: {
      light: '300',
      normal: '400',
      medium: '600',
      
    },


    fontFamily: {
      'barlow': ['Barlow', 'sans-serif'],
      'crimson': ['"Crimson Pro"', 'serif'],
    },

    fontSize: {
      xs: ['0.75rem', { lineHeight: '1rem' }],
      sm: ['0.875rem', { lineHeight: '1.25rem' }],
      base: ['1rem', { lineHeight: '1.5rem' }],
      lg: ['1.125rem', { lineHeight: '1.75rem' }],
      xl: ['1.25rem', { lineHeight: '1.75rem' }],
      'm-second': ['0.813rem', { lineHeight: '1rem' }],
      'm-primary': ['1rem', { lineHeight: '1.25rem' }],
      'm-h5': ['1.25rem', { lineHeight: '1.5rem' }],
      'm-h4': ['1.5rem', { lineHeight: '1.75rem' }],
      'm-h3': ['1.813rem', { lineHeight: '2rem' }],
      'm-h2': ['2.188rem', { lineHeight: '2.25rem' }],
      'm-h1': ['2.813rem', { lineHeight: '2.5rem' }],
      'd-second': ['0.938rem', { lineHeight: '1rem' }],
      'd-primary': ['1.125rem', { lineHeight: '1.25rem' }],
      'd-h5': ['1.375rem', { lineHeight: '1.5rem' }],
      'd-h4': ['2.125rem', { lineHeight: '1.75rem' }],
      'd-h3': ['2.688rem', { lineHeight: '2.50rem' }],
      'd-h2': ['3.5rem', { lineHeight: '3.25rem' }],
      'd-h1': ['5.375rem', { lineHeight: '5rem' }],
    },

    
  },
  plugins: [],
};

export default config;

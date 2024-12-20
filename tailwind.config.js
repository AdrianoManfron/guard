/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        'grotesk': ['Schibsted Grotesk', 'sans-serif']
      },
      fontSize: {
        'heading': '24px',
        'large': '16px',
        'medium': '14px',
        'small': '12px',
        'xsmall': '10px',
        'label-medium': '14px',
        'label-small': '12px'
      },
      lineHeight: {
        'heading': '32px',
        'large': '24px',
        'medium': '22px',
        'small': '20px',
        'xsmall': '14px',
        'label-medium': '22px',
        'label-small':  '20px'
      },
      colors: {
        'content-primary': '#FFFFFF',
        'content-body': '#E2E2E2',
        'content-heading': '#C6C6C6',
        'content-muted': '#5E5E5E',
        'content-placeholder': '#777777',
        'content-inverse': '#111111',
        'brand': '#C4F120',
        'red': '#E61E32'
      },
      backgroundColor: {
        'primary': '#111111',
        'secondary': '#1B1B1B',
        'tertiary': '#303030',
        'brand': '#C4F120',
        'red': '#E61E32'
      },
      borderColor: {
        'primary': '#FFFFFF'
      },
      accentColor: {
        'brand': '#C4F120',
        'red': '#E61E32'
      },
      backgroundImage: {
        'login-register': "url('/images/login-register.png')",
      },
      maxWidth: {
        '1192': '1192px',
      }
    },
  },
  plugins: [
    require('daisyui'),
  ],
}


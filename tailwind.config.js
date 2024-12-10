/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        "grotesk": ["Schibsted Grotesk", "sans-serif"]
      },
      fontSize: {
        "heading": "24px",
        "text-large": "16px",
        "text-medium": "14px",
        "text-small": "12px",
        "text-xsmall": "10px",
        "label-medium": "14px",
        "label-small": "12px",
      },
      lineHeight: {
        "heading": "32px",
        "text-large": "24px",
        "text-medium": "22px",
        "text-small": "20px",
        "text-xsmall": "14px",
        "label-medium": "22px",
        "label-small": "20px",
      },
      colors: {
        "content-primary": "#FFFFFF",
        "content-body": "#E2E2E2",
        "content-heading": "#C6C6C6",
        "content-muted": "#5E5E5E",
        "content-placeholder": "#777777",
        "content-inverse": "#111111"
      },
      backgroundColor: {
        "background-primary": "#111111",
        "background-secondary": "#1B1B1B",
        "background-tertiary": "#303030"
      },
      borderColor: {
        "border-primary": "#FFFFFF"
      },
      accentColor: {
        "accent-brand": "#C4F120",
        "accent-red": "#E61E32"
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


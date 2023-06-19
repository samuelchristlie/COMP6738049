/** @type {import('tailwindcss').Config} */
export default {
	content: [
		"./resources/**/*.blade.php",
		"./resources/**/*.js",
		"./resources/**/*.vue",
	],
	theme: {
		extend: {},
	},
	daisyui: {
		themes: [
		{
			mytheme: {
				"primary": "#ae456f",
				"secondary": "#ebd1db",
				"accent": "#e5d5db",
				"neutral": "#fecdd3",
				"base-100": "#ffffff",
				"info": "#3abff8",
				"success": "#36d399",
				"warning": "#fbbd23",
				"error": "#f87272",
			},
		},
		],
	},
	plugins: [require("daisyui")],
}


// eslint.config.js
const { defineConfig } = require("eslint/config");

module.exports = defineConfig([
	{
		files: ["src/js/*.js"],
		ignores: ["**/*.config.js"],
		rules: {
			semi: "error",
            "prefer-const": "error"
		},
	},
]);
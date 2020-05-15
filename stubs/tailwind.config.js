module.exports = {
    theme: {
        extend: {},
        spinner: () => ({
            default: {
                color: "#dae1e7",
                size: "1em",
                border: "2px",
                speed: "500ms"
            }
        }),
        gradients: theme => ({
            "gradient-red": [
                "30deg",
                theme("colors.red.600"),
                theme("colors.red.700")
            ],
            "gradient-green": [
                "30deg",
                theme("colors.green.600"),
                theme("colors.green.700")
            ],
            "gradient-blue": [
                "30deg",
                theme("colors.blue.600"),
                theme("colors.blue.700")
            ],
            "gradient-orange": [
                "30deg",
                theme("colors.orange.600"),
                theme("colors.orange.700")
            ],
            "gradient-indigo": [
                "30deg",
                theme("colors.indigo.600"),
                theme("colors.indigo.700")
            ],
            "gradient-gray": [
                "30deg",
                theme("colors.gray.600"),
                theme("colors.gray.700")
            ]
        })
    },
    variants: {
        spinner: ["responsive"],
        gradients: ["responsive", "hover"],
        tableLayout: ["responsive", "hover", "focus"]
    },
    plugins: [
        require("tailwindcss-spinner")(),
        require("tailwindcss-plugins/gradients")
    ]
};

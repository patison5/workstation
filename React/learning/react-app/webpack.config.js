module.exports = (env, argv) => ({
	entry: `${__dirname}/src/index`,
	output: {
		path: `${__dirname}/public`,
		filename: 'bundle.js'
	},
	module: {
		rules: [
			{ test: /\.js$/, exclude: /node_modules/, loader: "babel-loader" }
		]
	},
	devtool: argv.mode === 'development' ? 'source-map' : false
})
const db = require('../db');

exports.getProduct = (callback) => {
	db.get().query("SELECT * FROM products ", (error, results) => {
	  	callback(error, results)
	});
}

exports.getProductById = (id, callback) => {
	db.get().query("SELECT * FROM products WHERE product_id = ?", [id], (error, results) => {
	  	callback(error, results)
	});
}
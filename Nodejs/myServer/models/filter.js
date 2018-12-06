const db = require('../db');

exports.getProductsBySubcategoryJSON = (query, callback) => {
	db.get().query(query, (error, results, fields) => {
	  	callback(error, results)
	});
}

exports.getFilterdProduct = (query, callback) => {
	db.get().query(query, (error, results) => {
	  	callback(error, results)
	});
}
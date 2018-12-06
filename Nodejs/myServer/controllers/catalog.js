var Catalog = require('../models/catalog');

exports.getProduct = (req, res) => {
	Catalog.getProduct((err, docs) => {
		if (err) {
			console.log(err);
			return res.sendStatus(500);
		}

		res.render("catalog", { 
			catalogElements: docs,
			user: {
				id: req.session.userId,
				login: req.session.userLogin
			}
		});
	});
}

exports.getProductById = (req, res) => {
	Catalog.getProductById(req.params.id, (err, result) => {
		if (err) {
			console.log(err);
			return res.send(err);
		}

		let status = result.length != 0 ? 200 : 404;

		res.render("product", {
			product: result,
			status: status,
			user: {
				id: req.session.userId,
				login: req.session.userLogin
			}
		});
	});
}
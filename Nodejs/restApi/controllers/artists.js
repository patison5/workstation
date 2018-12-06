var Artists = require('../models/artists');

exports.all = function (err, res) {
	Artists.all(function (err, docs) {
		if (err) {
			console.log(err);
			return res.sendStatus(500);
		}

		res.send(docs);
	});
}

exports.findById = function (req, res) {
	Artists.findById(req.params.id, function (err, docs) {
		if (err) {
			console.log(err);
			return res.send(err);
		}

		res.send(docs)
	});
}

exports.create = function (req, res) {
	var artist = {
		name: req.body.name
	};

	Artists.create(artist, function (err, docs) {
		if (err) {
			return res.sendStatus(500)				
			console.log(err)
		}

		res.send(artist);
	})
}

exports.update = function (req, res) {
	Artists.update(req.params.id, { $set: { name: req.body.name } }, function (err, result) {
		if (err) {
            console.log(err);
            return res.sendStatus(500);
        }
        
        res.sendStatus(200);
	})
}
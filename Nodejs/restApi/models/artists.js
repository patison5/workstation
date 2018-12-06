const ObjectID = require('mongodb').ObjectID;
const db = require('../db');

exports.all = function(cb) {
	db.get().collection('artists').find().toArray(function(err, docs) {
		cb(err, docs);
	});
};

exports.findById = function (id, cb) {
	db.get().collection('artists').findOne({ _id: ObjectID(id) }, function (err, docs) {
		cb(err, docs);
	});
}

exports.create = function (artist, cb) {
	db.get().collection('artists').insert(artist, function (err, docs) {
		cb(err, docs)
	})
}


exports.update = function (id, data, cb) {
	// updateMany
	db.get().collection('artists').updateOne(
        { _id: ObjectID(id) },
        data,
        {
            upsert: false,
            multi: false
        },
        function (err, result) {
            cb(err, result);
        }
    );
}
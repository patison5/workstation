const MongoClient = require('mongodb').MongoClient;
// const url = "mongodb://patison5:Ehp6MA-vJ-CZ-bw@apiserver-database-shard-00-00-95ymd.mongodb.net:27017,apiserver-database-shard-00-01-95ymd.mongodb.net:27017,apiserver-database-shard-00-02-95ymd.mongodb.net:27017/test?ssl=true&replicaSet=APIServer-Database-shard-0&authSource=admin&retryWrites=true";

const state = {
	db: null
};

exports.connect = function (url, collback) {
	if (state.db) {
		return collback();
	}

	MongoClient.connect(url, { useNewUrlParser: true }, function(err, database) {
		if (err) {
			console.log("Some shit is going on again! Check the fucking connection to the MongoDB!!!")
			return collback(err);
		}

		console.log("\nYou did it, bro! You connected to the MongoDB!!!\n")

		state.db = database.db('apiserver-database');

		// database.close();

		collback();
	});
}

exports.get = function () {
	return state.db;
}
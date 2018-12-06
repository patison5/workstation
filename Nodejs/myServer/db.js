const mysql = require('mysql');

const state = {
	db: null
};

exports.connect = function (dbName, callback) {
	if (state.db) {
		return callback();
	}

	state.db = mysql.createConnection({
		host     : 'localhost',
		user     : 'root',
		password : '',
		database: "myServer",
		multipleStatements: true
	});

	callback()
}

exports.test = function () {
	state.db.connect(function (err) {
		if (err) {
			console.log('error', err);
		} else {
			console.log('\n*********** Database connection successfully! ***********')
			console.log('Hostname: localhost' + '\nUser: root,' + '\nDatabase: myServer');
		}
	})
}

exports.get = function () {
	return state.db;
}
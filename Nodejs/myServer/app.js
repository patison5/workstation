const express = require("express");
const bodyParser = require("body-parser");
const path = require('path')
const session = require('express-session');
const MySQLStore = require('express-mysql-session')(session);

const routes = require('./routes')

var app = express();

app.set("view engine", "ejs");
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.use('*/public', express.static(__dirname + '/public'));

app.use(bodyParser.json());



// сессии
const options = {
    host: 'localhost',
    port: 3306,
    user: 'root',
    password: '',
    database: 'myServer'
};
 
const sessionStore = new MySQLStore(options);
 
app.use(session({
    key: 'user_cookie',
    secret: 'session_cookie_secret',
    store: sessionStore,
    resave: true,
    saveUninitialized: false
}));
// сессии



app.use('/api/auth', routes.auth)
app.use('/catalog',  routes.catalog)

app.get("/", (req, res) => {
	res.render("index", {
		user: {
			id:    req.session.userId,
			login: req.session.userLogin
		}
	});
});

app.get("/news", (req, res) => {
	res.render("news", {
		user: {
			id:    req.session.userId,
			login: req.session.userLogin
		}
	});
});
app.get("/salons", (req, res) => {
	res.render("salons", {
		user: {
			id:    req.session.userId,
			login: req.session.userLogin
		}
	});
});


module.exports = app;
DROP TABLE IF EXIST USERS;

CREATE TABLE USERS (
	user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	user_login VARCHAR(30) NOT NULL,
	user_hash TEXT NOT NULL,
	user_email VARCHAR(50),
	reg_date TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE products;

CREATE TABLE products (
	product_id             INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
	product_title          VARCHAR(50) NOT NULL ,
	product_img            TEXT NOT NULL ,
	product_price          float NOT NULL ,
	product_discount_value  INT NOT NULL ,
	product_article        VARCHAR(50) NOT NULL ,
	product_reg_date       TIMESTAMP ,
	product_specifications_JSON TEXT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/8.jpg", "1200", "10");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги длинные золотые", "photos/product_1.png", "12300", "50");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги серебряные", "photos/2.jpg", "8300", "10");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги длинные", "photos/3.jpg", "4820", "30");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/4.jpg", "4870", "10");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/5.jpg", "6370", "NULL");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/6.jpg", "9240", "10");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/7.jpg", "19900", "10");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/9.jpg", "1300", "NULL");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/10.jpg", "33300", "10");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/11.jpg", "8900", "NULL");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги длинные золотые", "photos/12.jpg", "1230", "10");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/14.jpg", "9400", "10");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/15.jpg", "11300", "10");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/16.jpg", "3300", "NULL");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Серьги золотые", "photos/17.jpg", "2800", "0");
INSERT INTO products (product_title, product_img, product_price, product_discount_value) VALUES ("Кольцо золотое", "photos/17.jpg", "2800", "0");

UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 925 пробы"}, {"name": "Вставка", "value": "Эмаль"}, 		{"name": "Примерный вес", "value": "3.96"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '1';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 325 пробы"}, {"name": "Вставка", "value": "Гранит"}, 		{"name": "Примерный вес", "value": "5.00"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '2';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 525 пробы"}, {"name": "Вставка", "value": "Изумруд"}, 		{"name": "Примерный вес", "value": "4.36"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '3';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 925 пробы"}, {"name": "Вставка", "value": "Сапфир"}, 		{"name": "Примерный вес", "value": "5.96"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '4';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 905 пробы"}, {"name": "Вставка", "value": "Фианит"}, 		{"name": "Примерный вес", "value": "6.96"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '5';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 900 пробы"}, {"name": "Вставка", "value": "Авантюрин"}, 	{"name": "Примерный вес", "value": "11.6"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '6';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 325 пробы"}, {"name": "Вставка", "value": "Бирюза"}, 		{"name": "Примерный вес", "value": "12.9"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '7';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 905 пробы"}, {"name": "Вставка", "value": "Эмаль"}, 		{"name": "Примерный вес", "value": "8.96"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '8';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 525 пробы"}, {"name": "Вставка", "value": "Изумруд"}, 		{"name": "Примерный вес", "value": "4.36"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '9';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 925 пробы"}, {"name": "Вставка", "value": "Сапфир"}, 		{"name": "Примерный вес", "value": "5.96"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '10';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 905 пробы"}, {"name": "Вставка", "value": "Фианит"}, 		{"name": "Примерный вес", "value": "6.96"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '11';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 900 пробы"}, {"name": "Вставка", "value": "Авантюрин"}, 	{"name": "Примерный вес", "value": "11.6"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '12';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 325 пробы"}, {"name": "Вставка", "value": "Бирюза"}, 		{"name": "Примерный вес", "value": "12.9"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '13';
UPDATE products SET product_specifications_JSON = '[{"name": "Металл", "value": "Серебро 905 пробы"}, {"name": "Вставка", "value": "Эмаль"}, 		{"name": "Примерный вес", "value": "8.96"}, 	{"name": "Для кого", "value": "Для женщин"}]' 	 WHERE product_id = '14';



drop table categories;

CREATE TABLE categories (
	category_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	category_title VARCHAR(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `categories` (category_title) VALUES ("type_of_decoration");
INSERT INTO `categories` (category_title) VALUES ("material");
INSERT INTO `categories` (category_title) VALUES ("collections");
INSERT INTO `categories` (category_title) VALUES ("insert");
INSERT INTO `categories` (category_title) VALUES ("price");
INSERT INTO `categories` (category_title) VALUES ("size");



drop table subcategory;

CREATE TABLE subcategory (
	subcategory_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	subcategory_title VARCHAR(30) NOT NULL,
	subcategory_name TEXT,
	category_id  INT,
	product_id  INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Все", 		"Everything",		"1",	"1"); 
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Шармы", 		"Charms",			"1",	"2"); 
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Цепочки", 	"Chains",			"1",	"3"); 
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Серьги", 		"Earrings",			"1",	"4"); 
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Подвески", 	"Pendants",			"1",	"5"); 
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Кольца", 		"Rings",			"1",	"6"); 
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Колье", 		"Necklace",			"1",	"7"); 
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Броши", 		"Brooches",			"1",	"8"); 
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Браслеты", 	"Bracelets",		"1",	"9"); 
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Кольца", 		"Rings",			"1",	"17"); 



INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Бриллиант", 		"Diamond",	  		"4",		 "1");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Изумруд", 		"Emerald",	  		"4",		 "4");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Сапфир", 			"Sapphire",	  		"4",		 "3");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Топаз", 			"Topaz",	  		"4",		 "2");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Гранат", 			"Garnet",	  		"4",		 "5");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Аметист", 		"Amethyst",	  		"4",		 "6");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Хризолит", 		"Chrysolite",	  	"4",		 "7");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Хризопраз", 		"Chrysoprase",	  	"4",		 "8");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Жемчуг", 			"Pearls",	  		"4",		 "9");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Бирюза", 			"Turquoise",	  	"4",		 "10");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Коралл", 			"Coral",	  		"4",		 "11");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Агат", 			"Agate",	  		"4",		 "12");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Авантюрин", 		"Aventurine",	  	"4",		 "13");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Фианит", 			"Fianit",	  		"4",		 "14");
INSERT INTO `subcategory` (subcategory_title, subcategory_name, category_id, product_id) VALUES ("Гранат", 			"Garnet",	  		"4",		 "17");




-- ****************** SqlDBM: Microsoft SQL Server ******************
-- ******************************************************************




SELECT * FROM subcategory LEFT JOIN products ON subcategory.product_id = products.product_id WHERE (subcategory_name = 'Topaz' and subcategory_name = 'Emerald') AND (subcategory_name = 'Earrings' OR subcategory_name = 'Charms');

-- products.product_id,category_id,subcategory_name
SELECT *  FROM products inner JOIN subcategory ON subcategory.product_id = products.product_id WHERE  subcategory_name = 'Emerald' and subcategory_name = 'Earrings';



SELECT * FROM products 
	inner JOIN subcategory ON subcategory.product_id = products.product_id
	inner JOIN categories ON categories.category_id = subcategory.category_id;


SELECT * FROM subcategory INNER JOIN categories ON categories.category_id = subcategory.category_id ;

SELECT * FROM (
	SELECT 
)



-- Rings or Charms -- type_of_decoration
-- Topaz or Garnet -- insert

SELECT products.product_id,products.product_title,  subcategory_id, subcategory.subcategory_name, subcategory.subcategory_title, subcategory.category_id, category_title FROM products 
	inner JOIN subcategory ON subcategory.product_id = products.product_id
	inner JOIN categories ON categories.category_id = subcategory.category_id
	WHERE subcategory.category_id = 
	   (SELECT avg(subcategory.category_id) 
	        FROM subcategory 
	        WHERE subcategory_name = 'Rings' or subcategory_name = 'Charms'); 






-- теперь их нужно связать через AND
SELECT *
    FROM subcategory 
    WHERE subcategory_name = 'Rings' or subcategory_name = 'Charms';

SELECT *
    FROM subcategory 
    WHERE subcategory_name = 'Topaz' or subcategory_name = 'Garnet';


SELECT * FROM (
	SELECT categories.category_title AS category_title1,  categories.category_id, subcategory.product_id
	    FROM subcategory 
	    inner JOIN categories ON categories.category_id = subcategory.category_id
	    WHERE subcategory_name = 'Rings' or subcategory_name = 'Charms'

	UNION

	SELECT categories.category_title AS category_title2,  categories.category_id, subcategory.product_id
	    FROM subcategory 
	    inner JOIN categories ON categories.category_id = subcategory.category_id
	    WHERE subcategory_name = 'Topaz' or subcategory_name = 'Garnet'
);
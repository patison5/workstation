var Filter = require('../models/filter');

exports.getFilterdProduct =  (req, res) => {

	console.log("\n\n//////////////////...filter start working...//////////////////\n");
	console.log(JSON.stringify(req.body, null, 2));

	var filterJSON = req.body;

	for (let i = 0; i < filterJSON.length; i++) {
		let jsonCategory = filterJSON[i],
			subcategory  = jsonCategory.elements;

		if (subcategory.length > 0) {
			// формаирование строки для запроса //переделать !!! важно !!! =)
			var queryLink2 = "SELECT * FROM subcategory LEFT JOIN products ON subcategory.product_id = products.product_id WHERE subcategory_name = '" +  subcategory[0].name + "' ";
			for (let j = 1; j < subcategory.length; j++)
				queryLink2 = queryLink2 + " OR subcategory_name = '" + subcategory[j].name + "' ";
			queryLink2 = queryLink2 + ';';

			// console.log(queryLink2)

			var test = "SELECT *  FROM products inner JOIN subcategory ON subcategory.product_id = products.product_id where subcategory_name = 'Earrings' and subcategory_name = 'Emerald';"

			Filter.getFilterdProduct(test,  (err, docs) => {
				if (err) {
					console.log(err);
					return res.sendStatus(500);
				}
				res.send(docs);
			});
		}
	}

	console.log("\n//////////////////...filter stop working...//////////////////\n");
}


exports.getFilterdProduct2 =  (req, res) => {
	let url = req._parsedUrl.pathname.split('/');	// url - путь: localhost:3000/catalog/filter/category1-category2-category3/sub1-sub2-sub3+sub1-sub2-sub3

	let section = url[1];  							// секция - filter
	let categories = url[2].split('-');				// массив категорий	[catergory1, category2, category3]
	let subCategoriesGroups = url[3].split('+');	// массив подкатегорий в группах: [sub1-sub2-sub3, sub1-sub2-sub3, sub1-sub2-sub3]

	var filterData = [];							//итоговый json-массив

	for (let i = 0; i < categories.length; i++) {
		filterData.push({
			category: categories[i],
			subCategory: []
		});

		if (subCategoriesGroups[i]) {
			let subCategories = subCategoriesGroups[i].split('-');

			for (let j = 0; j < subCategories.length; j++) {
				filterData[i].subCategory.push(subCategories[j])
			}	
		}
	}


	// необходимо удалить повторяющиеся элементы!!! это важно
	var subCategory = []; 

	for (let i = 0; i < subCategoriesGroups.length; i++) {
		subCategory = subCategory.concat(subCategoriesGroups[i].split('-'));
	}


	// preparing query link
	var queryLink = "";

	for (var i = 0; i < subCategory.length; i++) {
		queryLink = queryLink + "SELECT * FROM subcategory LEFT JOIN products ON subcategory.product_id = products.product_id WHERE subcategory_name = '" + subCategory[i] + "'; ";
	}


	// второй вариант - and or
	var queryLink2 = "SELECT * FROM subcategory LEFT JOIN products ON subcategory.product_id = products.product_id WHERE subcategory_name = '" +  subCategory[0] + "' ";
	for (var i = 1; i < subCategory.length; i++) {
		queryLink2 = queryLink2 + " OR subcategory_name = '" + subCategory[i] + "' ";
	}
	queryLink2 = queryLink2 + ';'

	Filter.getProductsBySubcategoryJSON(queryLink2, (err, products) => {
		console.log(products)


		res.send({
			// url: url,
			// section: section,
			// categories: categories,
			// subCategories: subCategoriesGroups
			result: products
		})
	});
	
	// filterData = [{json}] запрос
}
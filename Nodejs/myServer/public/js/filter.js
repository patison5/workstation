var mainFilter = document.getElementById('mainFilter');

var filterConfig = [];

var removeCategory = function(arr, attr, value){
    var i = arr.length;
    while(i--){
       if( arr[i] && arr[i].hasOwnProperty(attr) && (arguments.length > 2 && arr[i][attr] === value ) ){ 
           arr.splice(i,1);
       }
    }
    return arr;
}

var removeCategoryElement = function (arr, attr, value, element) {
	var i = arr.length;
	var k = 1; //сколько элементов удалять из массива элементов

	while(i--){
		if(arr[i] && arr[i].hasOwnProperty(attr) && (arguments.length > 2 && arr[i][attr] === value )){ 
			var elements = arr[i]["elements"];
				// elements.splice(arr[i]["elements"].indexOf(element), k) //эквивалентно циклу внизу

			for (var j = 0; j < elements.length; j++) {
				if (elements[j].name == element) {
					elements.splice(j, k);
				}
			}
		}
	}
	return false;
}

function showTags () {
	let tagsWrap = document.getElementsByClassName('selected-tags')[0];

	tagsWrap.innerHTML = "";

	for (var i = 0; i < filterConfig.length; i++) {
		for (j = 0; j < filterConfig[i]["elements"].length; j++) {

			let el 	 = document.createElement('div'),
				span = document.createElement('span'),
				iTag = document.createElement('i');

			iTag.setAttribute('data-x', i);
			iTag.setAttribute('data-y', j);
			iTag.setAttribute('data-name', filterConfig[i]["elements"][j].name);

			el.className = "selected-tags__element";
			span.innerHTML = filterConfig[i]["elements"][j].title;

			el.appendChild(span).appendChild(iTag);
			tagsWrap.appendChild(el);

			iTag.addEventListener('click', function () {
				// необходимо удалить из общака 

				let temInput = document.getElementById(this.dataset.name);
					// temInput.checked = false;

				startFiltering(temInput);
			})
		}
	}
}

function startFiltering () {

	if (this.type == "checkbox" && this.name) {
		let category = this.parentNode.parentNode.dataset.category; //takes from parent dataset

		if (this.checked) {
			let categoryExistance = filterConfig.find(x => (x.category == category)) ? true : false;

			if (!categoryExistance) {
				//create array of elements: []
				console.log(this.dataset.title)
				filterConfig.push({
					"category": category,
					"elements": [{
						"name" : this.name, 
						"title": this.dataset.title
					}]
				});
			} else {
				//push the element to existing array of elements: []
				filterConfig.find(x => x.category === category).elements.push({
					"name" : this.name, 
					"title": this.dataset.title
				});
			}

		} else {

			let result = filterConfig.find(x => (x.elements.length === 1 && x.category === category)) ? true : false;

			if (result) {
				removeCategory(filterConfig, "category", category)
			} else {
				removeCategoryElement(filterConfig, "category", category, this.name)

				// filterConfig.find(x => x.category === category).elements.splice(indexOf(this.name), 1); //remove element from elements: []
			}
		}

		showTags();
		window.location.href = "localhost:3000/catalog/filter";
		console.log('href: ',window.location.href)

		// // Sets the new location of the current window.
		// window.location = "https://www.example.com";
		 
		// Sets the new href (URL) for the current window.
		// window.location.href = "http://localhost:3000/catalog";

		sendToServer();

		console.log("\nИтоговый json:\n\n", JSON.stringify(filterConfig, null, 2), "\n") // красивый вывод для отладки..
	}
}


for (let i = 0; i < mainFilter.length; i++) {
	mainFilter.elements[i].addEventListener('change', startFiltering)
}




function sendToServer () {
    $.ajax({
        type: "post",
        url: "/catalog/filter", 
        dataType: "json",
        contentType: "application/json; charset=UTF-8",
        data:  JSON.stringify(filterConfig,null, 2)
    }).done(function ( data ) { 
    	console.log("Response:" + data.message); 
    });

}




// function processAjaxData(response, urlPath){
//      // document.getElementById("content").innerHTML = response.html;
//      document.title = response.pageTitle;
//      window.history.pushState({"html":response.html,"pageTitle":response.pageTitle},"", urlPath);
//  }


// // window.onpopstate = function(e){
// // 	console.log(e)

// //     if(e.state){
// //         document.getElementById("content").innerHTML = e.state.html;
// //         document.title = e.state.pageTitle;
// //     }
// // };

// window.onpopstate = function(event) {
// 	console.log(event.state)
// 	alert("location: " + document.location + ", state: " + JSON.stringify(event.state));
// };

// // history.pushState({page: 1}, "title 1", "?page=1");
// // history.pushState({page: 2}, "title 2", "?page=2");
// // history.replaceState({page: 3}, "title 3", "?page=3");
// // history.back(); // alerts "location: http://example.com/example.html?page=1, state: {"page":1}"
// // // history.back(); // alerts "location: http://example.com/example.html, state: null
// // history.go(2);  // alerts "location: http://example.com/example.html?page=3, state: {"page":3}

// console.log(history)
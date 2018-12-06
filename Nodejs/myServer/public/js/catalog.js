const _btnList = document.getElementsByClassName('addToCart');

for (var i = 0; i < _btnList.length; i++) {
	_btnList[i].addEventListener("click",  (e) => {
		var element = {
			id: 		e.target.dataset.id,
			title:  	e.target.dataset.title,
			price: 		e.target.dataset.price,
			discount: 	e.target.dataset.discount,
			cout: 		1
		}

		addToCart(element, e.target)
		renderHeaderBasket();
	})
}

function getCartData(){
  return JSON.parse(localStorage.getItem('cart'));
}
// Записываем данные в LocalStorage
function setCartData(el){
  localStorage.setItem('cart', JSON.stringify(el));
  return false;
}

function addToCart(element, btn){
	btn.disabled = true; // блокируем кнопку на время операции с корзиной

	var cartData = getCartData() || {};

	if(cartData.hasOwnProperty(element.id)){
		cartData[element.id].cout += 1;
	} else {
		cartData[element.id] = element;
	}

	if(!setCartData(cartData)){ // Обновляем данные в LocalStorage
		btn.disabled = false;
	}

	return false;
}

function renderHeaderBasket () {
	let cartData = getCartData(),
		totalItems = 0, 
		totalPrice = 0,
		_haveItem  = false;

	console.log('\n\nМоя корзина:\n')

	if(cartData !== null){	
		for (var item in cartData) {
		    if (cartData.hasOwnProperty(item)) {
		    	totalItems+=cartData[item].cout;
				totalPrice += cartData[item].cout * cartData[item].price * (100 - parseInt(cartData[item].discount)) / 100;

				// console.log('Товар:', item)
				// console.log('Цена: ' + cartData[item].price)
		  //   	console.log('Скидка: ' + (100 - parseInt(cartData[item].discount)) / 100)
		  //   	console.log('Кол-во: ' + cartData[item].cout)
		  //   	console.log('Итоговоя цена товара: ' + cartData[item].cout * cartData[item].price * (100 - parseInt(cartData[item].discount)) / 100)
		  //   	console.log('')
		    }
		}

		_haveItem = true;

	} else {
		console.log('в корзине пусто!')
		_haveItem = false;
	}

	let basketMessage = document.getElementById('basketMessage'),
		basketPrice   = document.getElementById('basketPrice'),
		ico = '<i class="basketIco" style="">&nbsp;</i>';

	if (_haveItem) {
		let element = (totalItems % 10 == 1) ? " товар" : ((totalItems % 10 < 5) && totalItems % 10 != 0) ? " товара" : " товаров"; 
		
		basketMessage.innerHTML = ico + 'В корзине <a href="#">' + totalItems + element + '</a>' 
		basketPrice.innerHTML = 'Сумма: <a href="#">' + totalPrice + ' р. </a>';
	} else {
		basketMessage.innerHTML = ico + 'Ваша корзина <a href="#">пуста</a>' 
		basketPrice.innerHTML = 'Сумма: <a href="#">0.00 р. </a>';
	}
}


function clearCart () {
	localStorage.removeItem('cart');
}

function deleteElement (id) {
	var cartData = getCartData();

	if (cartData[id].cout > 1) {
		cartData[id].cout--;
	} else {
		// cartData.splice(id, 1)
		delete cartData[id];
	}

	setCartData(cartData)
}




window.onload = function () {
	renderHeaderBasket();
}

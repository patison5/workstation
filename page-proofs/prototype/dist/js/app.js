$(document).ready(function() {

	var _reversed = false;

	function heightWindow () {
		var servicesImages = $('.js-services__img');

		$.each(servicesImages, function(key, element) {
			$(this).css("height", $(this).parent().width());

			$('.services__text-wrap').css("height", $(this).parent().width());
		});

	}
	heightWindow();

	function reverseServices () {
		var elements = $('.services__block');

		for (let i = 2; i < elements.length; i+=4) {
			let k = elements[i].innerHTML;
			elements[i].innerHTML = elements[i+1].innerHTML;
			elements[i+1].innerHTML = k;
		}

		_reversed = !_reversed;
	}


	$('.switch-mobile__btn').click(function () {
		$('.header__top-mobile').toggleClass('block-active');
	})

	if ((window.innerWidth <= 730) && (window.innerWidth > 480)) {
		reverseServices();
	}




	function changingWindowOffset () {
		$(".list-menu__link").on("click", function (event) {
			event.preventDefault();

			if ($(this).text() == "Блог") {
				window.location.href = $(this).attr("href");
			} else {
				// expierence-article

				 var id  = "#" + $(this).attr('href'),
				 		 mg  = $('.fixed__header').outerHeight(),
				 		 top = $(id).offset().top - mg;

				 console.log(top)

				 $('body,html').animate({scrollTop: top}, 1500);
			}
		});
	}
	changingWindowOffset();



	const headerHeight = $('.header__top-wrap').outerHeight();

	$(window).scroll(function(){
	  var element = $('.header__top-wrap'),
	      scroll = $(window).scrollTop();

	  if (scroll >= headerHeight) element.addClass('fixed__header');
	  else element.removeClass('fixed__header');
	});





	$(window).resize(function() {
		heightWindow();

		// changing blocks positions depending on the screen width
		if ((window.innerWidth > 730) && _reversed) {
			reverseServices();
		} else if ((window.innerWidth <= 730) && (window.innerWidth > 480) && !_reversed) {
			reverseServices();
		} else if ((window.innerWidth <= 480) && _reversed) {
			reverseServices();
			console.log('bum')
		}
	});
})

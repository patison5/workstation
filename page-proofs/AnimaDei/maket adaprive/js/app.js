window.onload = function () {
  // открытие/закрытие меню при клике
  var burgerBtn = document.getElementsByClassName('burger__btn')[0];
  burgerBtn.addEventListener('click', function () {
    var burgerMenu = document.getElementsByClassName('burger-menu')[0];
        menuStyle =  window.getComputedStyle(burgerMenu, null);

    if (menuStyle.display == "block") {
      burgerMenu.style.display = "none";
    } else {
      burgerMenu.style.display = "block";
    }
  });

  // закрытие меню при клике вне области меню
  window.addEventListener('click', function (e) {
    var burgerMenu = document.getElementsByClassName('burger-menu')[0],
        burgerBtn = document.getElementsByClassName('burger__btn')[0],

        // дополнительно для селекта
        selectElements = document.getElementsByClassName('select__elements'),
        selectView = document.getElementsByClassName('visible-select__view');


    if (!burgerMenu.contains(e.target) && !burgerBtn.contains(e.target)) { burgerMenu.style.display = 'none' }


    // доп. закрытие элементов селека при клике вне зоны...
    for (var i = 0; i < selectView.length; i++) {
      if (!selectElements[i].contains(e.target) && !selectView[i].contains(e.target)) { selectElements[i].style.display = 'none' }
    }

  })


  // стилизация кастомного селекта
  var selectView = document.getElementsByClassName('visible-select__view');

  // функция закрытия и открытия при клике по элементу
  function toggleSelectElements(e, event) {
    var selectElements = document.getElementsByClassName('select__elements')[e];

    if (window.getComputedStyle(selectElements, null).display == "none") {
      selectElements.style.display = "block";
    } else {
      selectElements.style.display = "none";
    }
  }

  // навешиваем функцию на каждый элемент
  for (var i = 0; i < selectView.length; i++) {
    selectView[i].addEventListener('click', toggleSelectElements.bind(null, i))
  }

}

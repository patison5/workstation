window.onload = function () {
  var burger__btn = document.getElementsByClassName('burger__btn')[0];

  burger__btn.addEventListener('click', function () {
    var burger_menu = document.getElementsByClassName('burger-menu')[0];
        menuStyle =  window.getComputedStyle(burger_menu, null);

    if (menuStyle.display == "block") {
      burger_menu.style.display = "none";
    } else {
      burger_menu.style.display = "block";
    }
  });

  // var wraper = document.getElementsByClassName('wraper')[0]
  //
  // wraper.addEventListener('click', function () {
  //   var burger_menu = document.getElementsByClassName('burger-menu')[0];
  //       // burger_menu.style.display = 'none'
  //       console.log('s');
  // })
}

// arr      - массив, в котором мы забиваем наши клетки значниями фигур
// arr2     - массив, с которым мы будем сравнивать в конце - тип финальный, который должен получиться
// blocks   - маасив из блоков, просто хитрый способ доступа к данным, тут письменно хер объяснишь, показать проще

var arr    = [["&#9820", "&#9820", "&#9820"],  
              ["", "", ""],
              ["&#9816", "&#9816", "&#9816"]],

    arr2   = [["&#9816", "&#9816", "&#9816"] , 
              ["", "", ""], 
              ["&#9820", "&#9820", "&#9820"]],

    blocks = [["block_1", "block_2", "block_3"], 
              ["block_4", "block_5", "block_6"],
              ["block_7", "block_8", "block_9"]];


// элемент, по которому кликаем перый раз
var parent = null;

// эта функция раскрасит наши ячейки в шахматную доску, объяснять думаю смысла нет, заполняет по диагонали...)
// при желании можешь ее удалить, а также ее вызов на 34 строке.
function setColor () {
    for (var i = 0; i < 3; i++) {
        for (var j = 0; j < 3; j++) {
            let el = document.getElementsByClassName(blocks[i][j])[0];

            if (i % 2 == j % 2)
                el.style.background = "#fff";
        }
    }
}

function setup () {
    setColor();


    // не стоит забывать, что тут мы работаем с каждым блоком по отдельности
    for (var i = 0; i < 3; i++) {
        for (var j = 0; j < 3; j++) {
            let el = document.getElementsByClassName(blocks[i][j])[0],  // берем (i, j) элемент и сохраняем в переменную
                type = "";                                              // тип фигуры, которая стоит на этой клетке, либо пустое значение, если фигуры нет
            

            // узнаем, что стоит на этой клетке, если это фигура, заполнить type, иначе оставить пустое значение - ваш кэп
            if (arr[i][j] == "&#9820") type = "BlackROOK"
            else if (arr[i][j] == "&#9816") type = "WhiteHOURSE"


            // сохраняем отрибуты каждому блоку, это первоначальная настройка
            el.setAttribute("data-x", i);
            el.setAttribute("data-y", j);
            el.setAttribute("data-type", type);

            // заполняем блок значением сооттветсвующим его позиции из массива arr.
            el.innerHTML = arr[i][j];

            // навешиваем фукнцию клика на блок
            el.addEventListener('click', function () {

                // в нашем случае parent - (объект) клетка, которую мы хотим переместить, 
                // this - (объект) клетка, на которую кликнули только что
                if (parent == null) {
                    // отловили первый клик, следовательно просто сохраним значения той фигуры, которой хотим пойти
                    parent = this;
                } else {
                    // делаем ход. в Функцию передается элемент на который кликнули (вторая по счету кликов клетка)
                    moveElement(this);
                    // обнуляем значения, чтобы сбросить "условный счетчик кликов"
                    parent = null;
                }
            })
        }
    }
}

function getAtributeBy(x,y) {
    return document.getElementsByClassName(blocks[x][y])[0].dataset.type;
}

function move(el, parent) {
    // если клетка пустая - поменять местами значения !! и атрибуты клеток !!
    // dataset - это просто способ ттаксать значения атрибутов клетки, что сохранили ранее (координаты (х,у),
    // а также тип фигуры - конь или ладья и их соответствующее преставление в коде таблицы аски)
    // innerHTML - позволяет получить или записать то, что находиться между теками <div>вот это значение</div>
    if (el.innerHTML == "") {
        el.innerHTML = parent.innerHTML;
        parent.innerHTML = "";
        el.setAttribute("data-type", parent.dataset.type)
        parent.setAttribute("data-type", "")
    } else {alert("неверный ход!")}
}

// функция второго клика - передвижение
function moveElement(element) {

    // сохраняем значения родителя (локальные переменные)
    x1 = parent.dataset.x;
    y1 = parent.dataset.y;

    // сохраняем собственные значения (локальные переменные)
    x2 = element.dataset.x;
    y2 = element.dataset.y;

    // высчитываем позиции (локальные переменные)
    z1 = Math.abs(x1 - x2);
    z2 = Math.abs(y1 - y2);

    // Если лошадь, ходим буквой Г
    if (parent.dataset.type == "WhiteHOURSE") {

        //проверка на правильность хода коня
        if (((z1 == 1) && (z2 == 2)) || ((z1 == 2) && (z2 == 1))) {    
            move(element, parent);
        }
    } 
    
    // Если ладья, ходим прямо или в сторону   (не упусти тот факт, что тут else if, я ток из-за коментария перенес но новую строчку...)
    else if (parent.dataset.type == "BlackROOK") {              
        if (((z1 >= 1) && (z2 == 0)) || ((z1 == 0) && (z2 >= 1))) {
            var fl = true;

            var k1 = x1 - x2;
            var k2 = y1 - y2;
            
            if ((Math.abs(k1) == Math.abs(k2)) && (k1 > 0 && k2 < 0)) {
                console.log('по диагонали вправо вверх')
                for (let i = 1; i <= Math.abs(k1); i++) {  
                    let attr = getAtributeBy(parseInt(parent.dataset.x) - i, parseInt(parent.dataset.y) + i);
                    if (attr != "") {
                        fl = false;  //запрещает ходить...
                        break;
                    }
                }
            } else if ((k1 > 0) && (k2 == 0)) {
                console.log('по вертикали вверх')
                for (let i = 1; i <= k1; i++) {
                    let attr = getAtributeBy(parseInt(parent.dataset.x) - i, parseInt(parent.dataset.y));
                    if (attr != "") {
                        fl = false;  //запрещает ходить...
                        break;
                    }
                }
            } else if ((k1 < 0) && (k2 == 0)) {
                console.log('по вертикали вниз')                    
                for (let i = 1; i <= Math.abs(k1); i++) {
                    console.log(x2, y2, "   ", parseInt(parent.dataset.x), parseInt(parent.dataset.y))
                    console.log(parseInt(parent.dataset.x) + i, parseInt(parent.dataset.y))

                    let attr = getAtributeBy(parseInt(parent.dataset.x) + i, parseInt(parent.dataset.y));
                    if (attr != "") {
                        fl = false;  //запрещает ходить...
                        break;
                    }
                }
            } else if ((k1 == 0) && (k2 > 0)) {
                console.log('по горизонтали влево')
                for (let i = 1; i <= Math.abs(k2); i++) {
                    let attr = getAtributeBy(parseInt(parent.dataset.x), parseInt(parent.dataset.y) - i);
                    if (attr != "") {
                        fl = false;  //запрещает ходить...
                        break;
                    }
                }
            } else if ((k1 == 0) && (k2 < 0)) {
                console.log('по горизонтали вправо')
                for (let i = 1; i <= Math.abs(k2); i++) {
                    let attr = getAtributeBy(parseInt(parent.dataset.x), parseInt(parent.dataset.y) + i);
                    if (attr != "") {
                        fl = false;  //запрещает ходить...
                        break;
                    }
                }
            }

            if (fl)
                move(element, parent);
            else alert('Фигура на пути!')
        }
    }


    // проверка на победу....
    flag = true;
    for (var i = 0; i < 3; i++)
        for (var j = 0; j < 3; j++)
            // тут идет сравнение по ascii коду символа...
            // если каждое значение клетки совпадает с (i,j) позицией элемента массива arr2 - значит мы выиграли
            // slice(n)         обрезает строку с начала на n элементов
            // charCodeAt(n)    берет аски код символа с n позиции
            // alert(message)   выводит сообщение message
            if (arr2[i][j].slice(2) != ''+(document.getElementsByClassName(blocks[i][j])[0].innerHTML.charCodeAt(0) || "")) {
                flag = false;
                break;
            }

    if (flag) alert("U've finished this game! \n Congrats!!! \n ")
}


setup();
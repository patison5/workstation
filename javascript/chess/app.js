// ............ можно первоначально забить любую фигуру ..............

//    Конь        пешка      Король    Королева     Ладья       Слон
// WhiteHOURSE  WhitePAWN  WhiteKING  WhiteQUEEN  WhiteROOK  WhiteBISHOP
// BlackHOURSE  BlackPAWN  BlackKING  BlackQUEEN  BlackROOK  BlackBISHOP

var arr    = [["", "", ""],  
              ["", "WhiteHOURSE","BlackROOK"], 
              ["", "", ""]],

    arr2   = [["", "", ""], 
              ["", "", ""], 
              ["", "", ""]],

    blocks = [["block_1", "block_2", "block_3"], 
              ["block_4", "block_5", "block_6"], 
              ["block_7", "block_8", "block_9"]];

var parent = null,
    steps  = 0,
    round  = 1;

function setColor () {
    for (var i = 0; i < 3; i++) {
        for (var j = 0; j < 3; j++) {
            let el = document.getElementsByClassName(blocks[i][j])[0];

            if (i % 2 == j % 2)
                el.style.background = "#fff";
        }
    }
}


function drawElement(checker, element) {
    switch (checker) {

        // ______________ белые фигуры ______________
        case "WhiteHOURSE":
            element.innerHTML = "&#9816";
            element.setAttribute("data-type", "WhiteHOURSE")
            break;

        case "WhitePAWN":
            element.innerHTML = "&#9817";
            element.setAttribute("data-type", "WhitePAWN")
            break;

        case "WhiteKING":    //Король
            element.innerHTML = "&#9812";
            element.setAttribute("data-type", "WhiteKING")
            break;

        case "WhiteQUEEN":   //Королева
            element.innerHTML = "&#9813";
            element.setAttribute("data-type", "WhiteQUEEN")
            break;

        case "WhiteROOK":    //Ладья
            element.innerHTML = "&#9814";
            element.setAttribute("data-type", "WhiteROOK")
            break;

        case "WhiteBISHOP":  //слон
            element.innerHTML = "&#9815";
            element.setAttribute("data-type", "WhiteBISHOP")
            break;



        // ______________ черные фигуры ______________

        case "BlackHOURSE":  //Конь
            element.innerHTML = "&#9822";
            element.setAttribute("data-type", "BlackHOURSE")
            break;

        case "BlackKING":    //Король
            element.innerHTML = "&#9818";
            element.setAttribute("data-type", "BlackKING")
            break;

        case "BlackQUEEN":   //Королева
            element.innerHTML = "&#9819";
            element.setAttribute("data-type", "BlackQUEEN")
            break;

        case "BlackROOK":    //Ладья
            element.innerHTML = "&#9820";
            element.setAttribute("data-type", "BlackROOK")
            break;

        case "BlackBISHOP":  //слон
            element.innerHTML = "&#9821";
            element.setAttribute("data-type", "BlackBISHOP")
            break;

        case "BlackPAWN":  //пешка
            element.innerHTML = "&#9823";
            element.setAttribute("data-type", "BlackPAWN")
            break;

        default:
            element.innerHTML = "";
            element.setAttribute("data-type", "")
    }
}

function drawMenu(indexI, indexJ) {
    var wraper = document.createElement("div"),
        menu   = document.createElement("ul"),
        menuArr = [["", "Оставить пустым", ""],
                   ["WhiteHOURSE", "Белый конь", "&#9816"],
                   ["BlackHOURSE", "Черный конь", "&#9822"],
                   ["WhitePAWN",   "Белая пешка", "&#9817"],
                   ["BlackPAWN",   "Черная пешка", "&#9823"], 
                   ["WhiteKING",   "Белый король", "&#9812"],
                   ["BlackKING",   "Черный король", "&#9818"],
                   ["WhiteQUEEN",  "Белая королева", "&#9813"],
                   ["BlackQUEEN",  "Черная королева", "&#9819"],
                   ["WhiteROOK",   "Белая ладья", "&#9814"],
                   ["BlackROOK",   "Черная ладья", "&#9820"],
                   ["WhiteBISHOP", "Белый слон", "&#9815"],
                   ["BlackBISHOP", "Черный слон", "&#9821"]];

    wraper.className = "set-menu_wraper";
    menu.className = "set-menu" ;

    for (let i = 0; i < menuArr.length; i++) {
        var el = document.createElement('li');
        el.setAttribute('data-value', menuArr[i][2]);
        el.setAttribute('data-type',  menuArr[i][0]);
        el.innerHTML = menuArr[i][1];

        el.addEventListener('click', function () {
            let parent = this.parentNode.parentNode.parentNode;

            if ((indexI < 3) && (indexJ == 2)) {
                indexI++;
                indexJ=0;
            } else {
                indexJ++;
            }

            parent.innerHTML = this.getAttribute('data-value');
            parent.setAttribute("data-type", this.getAttribute('data-type'));
            this.parentNode.parentNode.style.display = "none";

            if ((indexI < 3) && (indexJ < 3)) drawMenu(indexI, indexJ);
            else setup();

        })

        menu.appendChild(el);
    }

    document.getElementsByClassName(blocks[indexI][indexJ])[0].appendChild(wraper);
    wraper.appendChild(menu);
}


function setPrivateVariables() {
    drawMenu(0, 0);
}

function reverseMassive() {
    for (let i = 0; i < arr.length; i++) {
        for (let j = 0; j < arr.length; j++) {
            arr2[arr.length - i - 1][arr.length - j - 1] = arr[i][j];
        }
    }
}


function setup () {
    setColor();

    for (var i = 0; i < 3; i++) {
        for (var j = 0; j < 3; j++) {
            let el = document.getElementsByClassName(blocks[i][j])[0];
            
            el.setAttribute("data-x", i);
            el.setAttribute("data-y", j);

            if (el.hasAttribute("data-type")) {
                console.log(i,j, el.getAttribute("data-type"));
                arr[i][j] = el.getAttribute("data-type");
            }

            drawElement(arr[i][j], el);

            el.addEventListener('click', function () {
                let count = 0;

                if (parent == null)
                    parent = this;

                this.style.border = "2px solid red";

                // делаем возможность отслеживания второго клика
                for (var k = 0; k < 3; k++)
                    for (var l = 0; l < 3; l++)
                        document.getElementsByClassName(blocks[k][l])[0].addEventListener("click",  moveElement, false);
            })
        }
    }

    reverseMassive();

    console.log(arr)
    console.log(arr2);
}

function changeBlocksValue(el, parent, attr) {
    if (el.innerHTML == "") {
        el.innerHTML = parent.innerHTML;
        parent.innerHTML = "";

        el.setAttribute("data-type", attr);
        parent.setAttribute("data-type", "");

        parent.style.border = "1px solid #000";
        steps++;
        document.getElementsByClassName('score')[0].innerHTML = steps;
    } else {
        el.style.background = "red";
        let tmp = el;

        // чисто красоту с подсветкой и таймаутом захерачил
        setTimeout(function() {tmp.style.background = "#ccc"; console.log(tmp)}, 1000);
    }
}

function getAtributeBy(x,y) {
    return document.getElementsByClassName(blocks[x][y])[0].dataset.type;
}


// функция второго клика - передвижение
function moveElement(e) {

    // сохраняем значения родителя
    x1 = parent.dataset.x;
    y1 = parent.dataset.y;

    // сохраняем собственные значения
    x2 = this.dataset.x;
    y2 = this.dataset.y;

    //получаем значение атрибута
    let attr = parent.getAttribute("data-type");

    // console.log("[" + x1 + "," + y1 +"," + x2 + "," + y2 + "],");

    // высчитываем позиции
    z1 = Math.abs(x1 - x2);
    z2 = Math.abs(y1 - y2);

    parent.style.border = "1px solid #000";
    this.style.border   = "1px solid #000";

    switch (attr) {

        case "WhiteHOURSE":  //Конь
        case "BlackHOURSE":
            if (((z1 == 1) && (z2 == 2)) || ((z1 == 2) && (z2 == 1)))
                changeBlocksValue(this, parent, attr);
            break;

        case "WhitePAWN":    //пешка
        case "BlackPAWN":
            if ((z1 == 1) && (z2 == 0))
                changeBlocksValue(this, parent, attr);
            break;

        case "WhiteKING":    //Король
        case "BlackKING":
            if ((z1 <= 1) && (z2 <= 1))
                changeBlocksValue(this, parent, attr);                
            break;

        case "WhiteQUEEN":   //Королева
        case "BlackQUEEN":
            if ((((z1 >= 1) && (z2 == 0)) || ((z1 == 0) && (z2 >= 1))) || (z1 == z2)) {
                var fl = true;

                var k1 = x1 - x2;
                var k2 = y1 - y2;

                console.log("k1: ", k1,", k2:", k2)

                // диагонали:
                if ((Math.abs(k1) == Math.abs(k2)) && (k1 > 0 && k2 > 0)) {
                    console.log('по диагонали влево вверх')
                    for (let i = 1; i <= Math.abs(k1); i++) {
                        let attr = getAtributeBy(parseInt(parent.dataset.x) - i, parseInt(parent.dataset.y) - i);
                        if (attr != "") {
                            fl = false;  //запрещает ходить...
                            break;
                        }
                    }

                } else if ((Math.abs(k1) == Math.abs(k2)) && (k1 < 0 && k2 > 0)) {
                    console.log('по диагонали влево вниз')
                    for (let i = 1; i <= Math.abs(k1); i++) {  
                        let attr = getAtributeBy(parseInt(parent.dataset.x) + i, parseInt(parent.dataset.y) - i);
                        if (attr != "") {
                            fl = false;  //запрещает ходить...
                            break;
                        }
                    }
                } else if ((Math.abs(k1) == Math.abs(k2)) && (k1 < 0 && k2 < 0)) {
                    console.log('по диагонали вправо вниз')
                    for (let i = 1; i <= Math.abs(k1); i++) {                      
                        let attr = getAtributeBy(parseInt(parent.dataset.x) + i, parseInt(parent.dataset.y) + i);
                        if (attr != "") {
                            fl = false;  //запрещает ходить...
                            break;
                        }
                    }
                } else if ((Math.abs(k1) == Math.abs(k2)) && (k1 > 0 && k2 < 0)) {
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
                    changeBlocksValue(this, parent, attr); 
                else alert('Фигура на пути!')
            }  
            break;

        case "WhiteROOK":    //Ладья
        case "BlackROOK":
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
                    changeBlocksValue(this, parent, attr); 
                else alert('Фигура на пути!')
            }
            break;

        case "WhiteBISHOP":  //слон
        case "BlackBISHOP":
            if (z1 == z2)
                changeBlocksValue(this, parent, attr);    
            break;

        default:
            alert("Запрещенный ход!")
    }


    // удаляем второй клик, иначе будет выполняться 9 раз подряд =()
    for (var k = 0; k < 3; k++)
        for (var l = 0; l < 3; l++)
            document.getElementsByClassName(blocks[k][l])[0].removeEventListener("click",  moveElement, false);

    // обнуляем родителя
    parent = null;

    // проверка на победу....
    flag = true;

    if (round % 2 != 0) {
        for (var i = 0; i < 3; i++) {
            for (var j = 0; j < 3; j++) {
                // тут идет сравнение по ascii коду символа...
                if (arr2[i][j] != document.getElementsByClassName(blocks[i][j])[0].getAttribute("data-type")) {
                    flag = false;
                    break;
                }
            }

            if (!flag) break;
        }
    }

    else 
        for (var i = 0; i < 3; i++) {
            for (var j = 0; j < 3; j++) {
                // тут идет сравнение по ascii коду символа...
                if (arr[i][j] != document.getElementsByClassName(blocks[i][j])[0].getAttribute("data-type")) {
                    flag = false;
                    break;
                }
            }

            if (!flag) break;
        }


    if (flag) {
        // alert("U've finished this game! \n Congrats!!! \n steps: " + steps)
        round++;
    }
}

function reset () {
    for (var i = 0; i < 3; i++)
        for (var j = 0; j < 3; j++)
            drawElement(arr[i][j], document.getElementsByClassName(blocks[i][j])[0]);

    steps = 0;
    document.getElementsByClassName('score')[0].innerHTML = steps;
}

// drawMenu();
setup();



// автонуб
function change(x, y, x1, y1) {
    let tmp = document.getElementsByClassName(blocks[x][y])[0].innerHTML;
              document.getElementsByClassName(blocks[x][y])[0].innerHTML = document.getElementsByClassName(blocks[x1][y1])[0].innerHTML;
              document.getElementsByClassName(blocks[x1][y1])[0].innerHTML = tmp;
}

function showHow() {
    steps = 0;
    var result  = [[0,0,1,2],[2,2,1,0],[2,1,0,0],[0,1,2,2],[2,0,0,1],[1,2,2,0],[0,2,2,1],[1,0,0,2]],
    resStep = 0;

    var handle = setInterval(function() {
        x1 = result[resStep][0];
        y1 = result[resStep][1];
        x2 = result[resStep][2];
        y2 = result[resStep][3];

        change(x1, y1, x2, y2);

        resStep++;
        steps++;

        document.getElementsByClassName('score')[0].innerHTML = steps;

        if (resStep == result.length) { clearInterval(handle); alert("Конец!"); resStep = 0; setup();};

    }, 800);
}


function dedMoroz () {
    console.log("hello");
    var inputElements = document.getElementsByClassName('messageCheckbox');
    console.log(inputElements[0].checked)

    for(var i=0; inputElements[i]; ++i){
          if(inputElements[i].checked){
               checkedValue = inputElements[i].value;
               console.log(checkedValue)
               break;
          }
    }
}




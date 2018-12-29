#include <iostream>
#include "MyMath.h"
#include "ArithProgression.h"
#include "GeomProgression.h"

using namespace std;

int main() {

    MyMath * mymath = new MyMath();
    ArithProgression * arProg1 = new ArithProgression(4, 5);
    GeomProgression  * geProg1 = new GeomProgression(4, 5);


    //первый объект для арифметической, создал и выполнил функции нахождения...
    arProg1 -> findJ(5);
    arProg1 -> findSum(7);

    geProg1 -> findJ(5);
    geProg1 -> findSum(7);


    //добаивил этот объект в вектор
    mymath -> addElementToVector(arProg1);
    mymath -> addElementToVector(geProg1);

    //показываю инфу по всем объектам
    mymath -> showInfo();

    return 0;
}

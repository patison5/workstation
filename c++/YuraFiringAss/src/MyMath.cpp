#include "MyMath.h"

MyMath::MyMath() {}

MyMath::~MyMath() {}


void MyMath::findJ() {
    std::cout << "hello" << std::endl;
}

void MyMath :: addElementToVector(MyMath * el) {
    _elements.push_back(el);
}



void MyMath :: showInfo () {
    int k = 0;

    for(std::vector<MyMath *>::iterator it = _elements.begin(); it != _elements.end(); ++it) {
        k++;

        (*it) -> showInfo();
    }
}

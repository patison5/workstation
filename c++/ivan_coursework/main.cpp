#include <iostream>
#include <vector>

#include "Hotel.h"

using namespace std;

int main() {

    // ������� ������
    Hotel * hotel = new Hotel ();

    (*hotel).setup();
    (*hotel).startProgram();

    return 0;
}

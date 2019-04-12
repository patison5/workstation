#include <iostream>
#include <vector>

#include "Hotel.h"

using namespace std;

int main() {

    // ֳכאגםûי מבתוךע
    Hotel * hotel = new Hotel ();

    (*hotel).setup();
    (*hotel).createOrder("Fedor", "Penin", 101);


    (*hotel).filterRooms();

    //cout << (*room).number;
    //cout << (*hotel).getRooms()[2] -> number;
    //cout << (*client1).name;
    //cout << "Client name:    " << (*order1).client -> name << endl;
    //cout << "Client surname: " << (*order1).client -> surname << endl;

    return 0;
}

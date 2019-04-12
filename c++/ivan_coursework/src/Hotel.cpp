#include "Hotel.h"
#include "Room.h"
#include "Client.h"
#include "Order.h"


#include <iostream>
using namespace std;

Hotel::Hotel(){

}

void Hotel::setup () {
    // комнаты, пусть их будет 5
    Room * room1 = new Room (101, 1500, false, 1);
    Room * room2 = new Room (202, 2400, false, 3);
    Room * room3 = new Room (303, 5100, true, 2);
    Room * room4 = new Room (404, 7800, true, 5);
    Room * room5 = new Room (505, 2210, false, 7);

    // помещаем комнаты в вектор главного класса приложения
    addRoom(room1);
    addRoom(room2);
    addRoom(room3);
    addRoom(room4);
    addRoom(room5);

    // делаем клиентов
    Client * client1 = new Client ("Fedor", "Penin", 20);
    Client * client2 = new Client ("Alexandr", "Parnev", 20);
    Client * client3 = new Client ("Ivan", "Zuravlev", 20);

    // сохраняем клиентов
    addClient(client1);
    addClient(client2);
    addClient(client3);
}

Hotel::~Hotel(){}


vector <Room *> Hotel::getRooms () {
    return this -> _rooms;
}

void Hotel::addRoom(Room * room){
    this -> _rooms.push_back(room);
}

void Hotel::addClient(Client * client){
    this -> _clients.push_back(client);
}


void Hotel::createOrder(string name, string surmane, int roomNumber) {
    Client * client = NULL;
    Room * room = NULL;

    // смотрим, существует ли такой пользователь в системе
    for(vector<Client *>::iterator it = _clients.begin(); it != _clients.end(); ++it) {
        if (((*it) -> name == name) && ((*it) -> surname == surmane)) {
            client = (*it);
            break;
        }
    }

    // смотрим существует ли такая команата
    for(vector<Room *>::iterator it = _rooms.begin(); it != _rooms.end(); ++it) {
        if ((*it) -> number == roomNumber) {
            room = (*it);
            break;
        }
    }

    if (client) {
        cout << "Client founded!" << endl << endl;
        cout << "Name:    " << client -> name << endl;
        cout << "Surname: " << client -> surname << endl;
        cout << "Age:     " << client -> age << endl << endl;

        if (room) {
            if (room -> isFree == true) {
                cout << "Beds:   " << room -> bedsNumber << endl;
                cout << "Price:  " << room -> price << endl;
                cout << "Number: " << room -> number << endl << endl;
                cout << "Room is free, starting creating order\n\n";

                // делаем заказ
                Order * order = new Order(client, room, 7, 4564);

                client -> addOrderToHistory(order);
                room   -> addOrderToHistory(order);
                room   -> isFree = false;

                _ordersHistory.push_back(order);

            } else {
                cout << "Room is occupied\n";
            }
        } else {
            cout << "Error! Room not existed!\n";
        }

    } else {
        cout << "Error! Client not existed!";
    }
}

void Hotel::filterRooms(double lowerPrice, double MaxPrice, int minBedsNumber, int maxBedsNumber, bool isLuxery) {
    cout << endl << endl;
    cout << "FILTERING BY:   " << endl;
    cout << "PRICE:          " << lowerPrice << "-" << MaxPrice << "$" << endl;
    cout << "NUMBER OF BEDS: " << minBedsNumber << "-" << maxBedsNumber << endl;
    cout << "IS LUXERY:      " << isLuxery << endl;

    vector <Room *> _filteredRooms;

    for(vector<Room *>::iterator it = _rooms.begin(); it != _rooms.end(); ++it) {
        if (((*it) -> price >= lowerPrice)          &&
            ((*it) -> price <= MaxPrice)            &&
            ((*it) -> bedsNumber >= minBedsNumber)  &&
            ((*it) -> bedsNumber <= maxBedsNumber)) {
            _filteredRooms.push_back((*it));
        }
    }

    cout << "FILTER FINISHED: " << _filteredRooms.size() << " rooms founded!" << endl;
}

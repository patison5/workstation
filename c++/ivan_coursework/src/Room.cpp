#include "Room.h"

#include <iostream>

Room::Room() {
    std::cout << "room created" << endl;
}

Room::~Room() {}

Room::Room(int number, int price, bool isLuxery, int bedsNumber) {
    this -> number = number;
    this -> price = price;
    this -> isLuxery = isLuxery;
    this -> bedsNumber = bedsNumber;
}

void Room::addOrderToHistory(Order * order){
    _ordersHistory.push_back(order);
}


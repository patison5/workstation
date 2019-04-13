#include "Client.h"

Client::Client(){
    this -> name = "";
    this -> surname = "";
    this -> age = 0;
}

Client::~Client(){}


Client::Client(string name, string surname, int age){
    this -> name = name;
    this -> surname = surname;
    this -> age = age;
}


void Client::addOrderToHistory(Order * order){
    _ordersHistory.push_back(order);
}



vector <Order *> Client::getOrderHistory () {
    return _ordersHistory;
}


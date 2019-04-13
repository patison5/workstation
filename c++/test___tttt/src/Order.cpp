#include "Order.h"
#include "Room.h"
#include "Client.h"

#include <iostream>
#include <ctime>

using namespace std;

Order::Order() {}
Order::~Order() {}

Order::Order(Client * client, Room * room, int period, int code) {

    checkPromocode(code);

    // ######## ПРОГРАММА ЛОЯЛЬНОСТИ ########
    // -- если число заказов > 5  - скидка 3%
    // -- если число заказов > 10 - скидка 5%
    // -- если число заказов > 15 - скидка 8%

    int N = (client -> getOrderHistory()).size();

    if (N < 2) {
        cout << "PRIVATE  : Unfortunately you don't have private discount!" << endl;
    } else if ((N >= 2) && (N < 10)) {
        cout << "Discount 3%!" << endl;
        this -> discount = 0.03;
    } else if ((N >= 10) && (N < 15)) {
        cout << "Discount 5%!" << endl;
        this -> discount = 0.05;
    } else if ((N >= 15) && (N < 25)) {
        cout << "Discount 8%!" << endl;
        this -> discount = 0.08;
    } else {
        cout << "Discount 12%!" << endl;
        this -> discount = 0.12;
    }

    // ñ÷èòàåì èòîãîâóþ ñòîèìîñòü... öåíà çà äåíü * ïåðèîä - äèñêîíò
    this -> totalPrice = room -> price * period - room -> price * period * (discount + promocode);
    cout << endl;
    cout << "TOTAL DISCOUNT : " << (discount + promocode) * 100 << "%" << endl;
    cout << "NUMBER OF DAYS : " << period << " DAYS" <<  endl;
    cout << "ROOM PRICE     : " << room -> price << "$ FOR 1 DAY" <<  endl;
    cout << "TOTAL PRICE    : " << this -> totalPrice << "$ FOR " << period << " DAYS" << endl;


    time_t now = time(0);       // current date/time based on current system
    char* date = ctime(&now);   // convert now to string form

    // ñîõðàíÿåì èíôîðìàöèþ (äåëàåì ñâÿçêó çàêàç- êîìíàòà, çàêàç - êëèåíò)
    this -> client = client;
    this -> room = room;
    this -> orderDate = date;
}

void Order::checkPromocode(int code) {
    switch (code) {
        case 4564:
            std::cout << "PROMOCODE: VITALICK PIDOR: You got 25% discount!" << endl;
            promocode = 0.25;
            break;

        case 5734:
            std::cout << "PROMOCODE: OLEG PIDOR: You got 8% discount!" << endl;
            promocode = 0.08;
            break;

        case 2143:
            std::cout << "PROMOCODE: SANYA PIDOR: You got 13% discount!" << endl;
            promocode = 0.13;
            break;

        default:
            std::cout << "PROMOCODE DOESNT WORK! NO DISCOUNT" << endl;
            promocode = 0;
            break;
    }
}

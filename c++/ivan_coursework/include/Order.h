#ifndef ORDER_H
#define ORDER_H

#include <Hotel.h>

class Order : public Hotel {
    public:
        Client * client;
        Room * room;

        string orderDate;       // дата оформления
        string checkIntDate;    // дата въезда
        string checkOutDate;    // дата отъезда

        double promocode = 0;
        double discount = 0;
        double totalPrice;


        Order();
        Order(Client * client, Room * room, int period, int code = 0);
        virtual ~Order();

    protected:

    private:
        void checkPromocode(int code);
};

#endif // ORDER_H

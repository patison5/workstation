#ifndef ROOM_H
#define ROOM_H

#include <Hotel.h>

class Room : public Hotel {
    public:
        bool isFree = true;
        bool isLuxery;

        int number;
        int price;
        int bedsNumber;

        Room();
        Room(int number, int price, bool isLuxery, int bedsNumber);

        void addOrderToHistory(Order * order);

        virtual ~Room();

    protected:

    private:
        vector <Order *> _ordersHistory;
};

#endif // ROOM_H

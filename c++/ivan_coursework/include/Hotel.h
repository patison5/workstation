#ifndef HOTEL_H
#define HOTEL_H

#include <istream>
#include <vector>

using namespace std;

class Client;
class Room;
class Order;

class Hotel {
    public:
        void setup();

        void checkIn  (Client * client);
        void checkOut (Client * client);

        void addRoom   (Room * room);
        void addClient (Client * client);

        void createOrder (string name, string surmane, int roomNumber);

        void filterRooms(double lowerPrice = 0, double  MaxPrice = 100000, int minBedsNumber = 1, int maxBedsNumber = 100, bool isLuxery = false);

        vector <Room *> getRooms ();

        Hotel();
        virtual ~Hotel();

    protected:

    private:
        vector <Room *>   _rooms;
        vector <Client *> _clients;
        vector <Order *>  _ordersHistory;
};

#endif // HOTEL_H

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
        void startProgram ();

        void checkIn  ();
        void checkOut ();

        void addRoom   (Room * room);
        void addClient (Client * client);

        void addNewRoom();
        void addNewClient();

        void createOrder (string name, string surmane, int roomNumber, int rentalPeriod, int promo);

        void filterRooms();
        void showFilteredList();
        void startFilter (double lowerPrice, double MaxPrice, int minBedsNumber, int maxBedsNumber, bool isLuxery);

        void showFilterCommands ();
        void showFilterOptions (double lowerPrice, double MaxPrice, int minBedsNumber, int maxBedsNumber, bool isLuxery);

        void showMenuCommands();

        void showAllClients();

        vector <Room *> getRooms ();

        Hotel();
        virtual ~Hotel();

    protected:

    private:
        vector <Room *>   _rooms;
        vector <Client *> _clients;
        vector <Order *>  _ordersHistory;

        vector <Room *> _filteredRooms;
};

#endif // HOTEL_H

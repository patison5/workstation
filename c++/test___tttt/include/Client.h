#ifndef CLIENT_H
#define CLIENT_H

#include <Hotel.h>

class Client : public Hotel {
    public:
        string name;
        string surname;
        int age;

        Client();
        Client(string name, string surname, int age);

        void addOrderToHistory(Order * order);
        vector <Order *> getOrderHistory ();

        virtual ~Client();

    protected:

    private:
        vector <Order *> _ordersHistory;
};

#endif // CLIENT_H

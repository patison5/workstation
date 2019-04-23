#include "Hotel.h"
#include "Room.h"
#include "Client.h"
#include "Order.h"


#include <iostream>
using namespace std;

Hotel::Hotel() {}
Hotel::~Hotel(){}

void Hotel::setup () {

    // êîìíàòû, ïóñòü èõ áóäåò 5
    Room * room1 = new Room (101, 1500, false, 1);
    Room * room2 = new Room (202, 2400, false, 3);
    Room * room3 = new Room (303, 5100, true, 2);
    Room * room4 = new Room (404, 7800, true, 5);
    Room * room5 = new Room (505, 2210, false, 7);

    // ïîìåùàåì êîìíàòû â âåêòîð ãëàâíîãî êëàññà ïðèëîæåíèÿ
    addRoom(room1);
    addRoom(room2);
    addRoom(room3);
    addRoom(room4);
    addRoom(room5);

    // äåëàåì êëèåíòîâ
    Client * client1 = new Client ("Fedor", "Penin", 20);
    Client * client2 = new Client ("Alexandr", "Parnev", 20);
    Client * client3 = new Client ("Ivan", "Zhuravlev", 20);

    // ñîõðàíÿåì êëèåíòîâ
    addClient(client1);
    addClient(client2);
    addClient(client3);
}

void Hotel :: startProgram () {
    showMenuCommands();
    //createOrder("Fedor", "Penin", 101);


    bool flag = true;
    int menuCommand = 0;

    while (flag) {
        cout << endl << "Choose command from list: " << endl;
        cin >> menuCommand;

        switch (menuCommand) {
            case 0:
                cout << "Quiting..." << endl;
                flag = false;
                break;

            case 1:
                checkIn ();
                break;

            case 2:
                checkOut ();
                break;

            case 3:
                addNewRoom ();
                break;

            case 4:
                addNewClient ();
                break;

            case 5:
                filterRooms();
                break;

            case 6:
                showMenuCommands();
                break;

            case 7:
                showAllClients();
                break;

            case 9:
                createOrder("Fedor", "Penin", 101, 6, 4544);
                break;

            default:
                cout << "UNKNOWN COMMAND... " << endl;
                flag = false;
                break;
        }
    }
}

void Hotel :: addNewRoom () {
    int n;
    int pr;
    int bN;
    bool iL;

    cout << "write number of room: ";
    cin >> n;
    cout << "write price of room: ";
    cin >> pr;
    cout << "write number of beds: ";
    cin >> bN;
    cout << "Is it luxery? (0 or 1) ";
    cin >> iL;

    Room * room = new Room (n, pr, iL, bN);
    _rooms.push_back(room);
}

void Hotel :: addNewClient () {
    string name;
    string surname;
    int age;

    cout << "write client's name: ";
    cin >> name;
    cout << "write client's surname: ";
    cin >> surname;
    cout << "write client's age: ";
    cin >> age;


    Client * client = new Client (name, surname, age);
    _clients.push_back(client);

    cout << "New client has been added to database!" << endl;
}

void Hotel :: checkIn () {
    string name;
    string surname;
    int roomNumber;
    int rentalPeriod = 1;
    int promo = 0;

    cout << "write name: ";
    cin >> name;
    cout << "write surname: ";
    cin >> surname;
    cout << "write room number: ";
    cin >> roomNumber;
    cout << "Write rental time: ";
    cin >> rentalPeriod;

    cout << "Do you have any promocode? ";
    cin >> promo;

    createOrder(name, surname, roomNumber, rentalPeriod, promo);
}

void Hotel :: checkOut () {
    int roomNumber;

    cout << "write room number: ";
    cin >> roomNumber;

    Room * room = NULL;

    for(vector<Room *>::iterator it = _rooms.begin(); it != _rooms.end(); ++it) {
        if ((*it) -> number == roomNumber) {
            room = (*it);
            break;
        }
    }

    if (room) {
        (*room).isFree = true;
        cout << "Client have been checked out.. " << endl;
    } else {
        cout << "No room found!..." << endl;
    }
}

vector <Room *> Hotel::getRooms () {
    return this -> _rooms;
}

void Hotel::addRoom(Room * room){
    this -> _rooms.push_back(room);
}

void Hotel::addClient(Client * client){
    this -> _clients.push_back(client);
}

void Hotel::createOrder(string name, string surmane, int roomNumber, int rentalPeriod, int promo) {
    Client * client = NULL;
    Room * room = NULL;

    // ñìîòðèì, ñóùåñòâóåò ëè òàêîé ïîëüçîâàòåëü â ñèñòåìå
    for(vector<Client *>::iterator it = _clients.begin(); it != _clients.end(); ++it) {
        if (((*it) -> name == name) && ((*it) -> surname == surmane)) {
            client = (*it);
            break;
        }
    }

    // ñìîòðèì ñóùåñòâóåò ëè òàêàÿ êîìàíàòà
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
                cout << "Room is free, starting creating order\n\n";

                cout << "\n------------------------------------------------------------"<< endl;
                cout <<   "---------------------- CREATING ORDER ----------------------";
                cout << "\n------------------------------------------------------------"<< endl << endl;

                cout << "################" << endl;
                cout << "# Beds:   " << room -> bedsNumber  <<endl;
                cout << "# Price:  " << room -> price  << endl;
                cout << "# Number: " << room -> number  << endl;
                cout << "################" << endl << endl;


                //string arrivingDate;
                //string leavingDate;

                //cout << endl << "Choose arriving and leaving date: " << endl;
                //cout << "Arriving date: ";
                //cin >> arrivingDate;
                //cout << "Leaving date: ";
                //cin >> leavingDate;

                // äåëàåì çàêàç
                Order * order = new Order(client, room, rentalPeriod, promo);

                client -> addOrderToHistory(order);
                room   -> addOrderToHistory(order);
                room   -> isFree = false;

                _ordersHistory.push_back(order);

                cout << "\n-----------------------------------------------------------"<< endl;
                cout <<   "---------------------- ORDER CREATED ----------------------";
                cout << "\n-----------------------------------------------------------"<< endl;

            } else {
                cout << "Room is occupied\n";
            }
        } else {
            cout << "Error! Room not existed!\n";
        }

    } else {
        cout << "Error! Client not existed!" << endl;
        cout << "You need to register client first!" << endl;
    }
}

void Hotel::filterRooms() {

    // DEFAULT VALUES FOR SEARCH
    double lowerPrice = 0;
    double MaxPrice = 100000;

    int minBedsNumber = 1;
    int maxBedsNumber = 100;

    bool isLuxery = false;

    _filteredRooms.clear();
    startFilter(lowerPrice, MaxPrice, minBedsNumber, maxBedsNumber, isLuxery);

    showFilterCommands (); //showing commands

    bool fl = true;

    while (fl) {
        int command = 0;

        cout << endl << "Choose command: ";
        cin >> command; // òóò íóæíà ïðîâåðêà íà áèëåáåðäó! èíà÷å âûëåòèò ñ îøèáêîé!

        showFilterOptions(lowerPrice, MaxPrice, minBedsNumber, maxBedsNumber, isLuxery);

        switch (command) {
            case 0:
                cout << "Quiting..." << endl;
                fl = false;
                break;

            case 1:
                cout << "Starting filtering..." << endl;
                _filteredRooms.clear();
                startFilter(lowerPrice, MaxPrice, minBedsNumber, maxBedsNumber, isLuxery);
                break;

            case 2:
                cout << "Set minimum price" << endl;
                cin >> lowerPrice;
                break;

            case 3:
                cout << "Set maximum price" << endl;
                cin >> MaxPrice;
                break;

            case 4:
                cout << "Set minimum beds number" << endl;
                cin >> minBedsNumber;
                break;

            case 5:
                cout << "Set minimum beds number" << endl;
                cin >> maxBedsNumber;
                break;

            case 6:
                cout << "Set luxery value: " << endl;
                cin >> isLuxery;
                break;

            case 7:
                cout << "Filtered rooms list:";
                showFilteredList();
                break;

            case 8:
                showFilterCommands ();
                break;

            default:
                cout << "UNKNOWN COMMAND... " << endl;
                fl = false;
                break;
        }
    }
}


void Hotel::showFilteredList() {
    if (_filteredRooms.size() == 0) {
        cout << " empty..." << endl;
    } else {
        cout << endl;
        for(vector<Room *>::iterator it = _filteredRooms.begin(); it != _filteredRooms.end(); ++it) {
            cout << "#" << (*it) -> number << ", " << (*it) -> bedsNumber << " beds, " << (*it) -> price << "$, " << "Is luxery: " << (*it) -> isLuxery << ", is free: " <<  (*it) -> isFree << endl;
        }
    }
}



void Hotel :: startFilter (double lowerPrice, double MaxPrice, int minBedsNumber, int maxBedsNumber, bool isLuxery) {
    for(vector<Room *>::iterator it = _rooms.begin(); it != _rooms.end(); ++it) {
        if (((*it) -> price >= lowerPrice)          &&
            ((*it) -> price <= MaxPrice)            &&
            ((*it) -> bedsNumber >= minBedsNumber)  &&
            ((*it) -> bedsNumber <= maxBedsNumber)) {
            _filteredRooms.push_back((*it));
        }
    }

    cout << endl << "FILTER FINISHED: " << _filteredRooms.size() << " rooms founded!" << endl;
}

void Hotel :: showFilterCommands () {
    cout << endl << "###### FILTER COMMANDS ######" << endl;
    cout << "0 - stop filtering" << endl;
    cout << "1 - start filtering" << endl;
    cout << "2 - set minimum price" << endl;
    cout << "3 - set maximum price" << endl;
    cout << "4 - set minimum beds number" << endl;
    cout << "5 - set maximum beds number" << endl;
    cout << "6 - set luxery value" << endl;
    cout << "7 - Show filtered rooms list" << endl;
    cout << "8 - Show commands" << endl;
}

void Hotel :: showFilterOptions (double lowerPrice, double MaxPrice, int minBedsNumber, int maxBedsNumber, bool isLuxery) {
    cout << endl << endl;
    cout << "FILTERING BY:   " << endl;
    cout << "PRICE:          " << lowerPrice << "-" << MaxPrice << "$" << endl;
    cout << "NUMBER OF BEDS: " << minBedsNumber << "-" << maxBedsNumber << endl;
    cout << "IS LUXERY:      " << isLuxery << endl << endl;
}


void Hotel :: showMenuCommands() {
    cout << endl << "###### MAIN COMMANDS ######" << endl;
    cout << "0 - quit" << endl;
    cout << "1 - check in client" << endl;
    cout << "2 - check out client" << endl;
    cout << "3 - add new room" << endl;
    cout << "4 - add new client" << endl;
    cout << "5 - filter rooms" << endl;
    cout << "6 - Show commands" << endl << endl;
    cout << "7 - show all clients" << endl;
}

void Hotel :: showAllClients () {
    for(vector<Client *>::iterator it = _clients.begin(); it != _clients.end(); ++it) {
        cout << (*it) -> name << " " << (*it) -> surname << " | " << (*it) -> age << endl;
    }
}

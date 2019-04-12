#include "Hotel.h"
#include "Room.h"
#include "Client.h"
#include "Order.h"


#include <iostream>
using namespace std;

Hotel::Hotel(){

}

void Hotel::setup () {
    // �������, ����� �� ����� 5
    Room * room1 = new Room (101, 1500, false, 1);
    Room * room2 = new Room (202, 2400, false, 3);
    Room * room3 = new Room (303, 5100, true, 2);
    Room * room4 = new Room (404, 7800, true, 5);
    Room * room5 = new Room (505, 2210, false, 7);

    // �������� ������� � ������ �������� ������ ����������
    addRoom(room1);
    addRoom(room2);
    addRoom(room3);
    addRoom(room4);
    addRoom(room5);

    // ������ ��������
    Client * client1 = new Client ("Fedor", "Penin", 20);
    Client * client2 = new Client ("Alexandr", "Parnev", 20);
    Client * client3 = new Client ("Ivan", "Zuravlev", 20);

    // ��������� ��������
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
                addNewOrder ();
                break;

            case 5:
                filterRooms();
                break;

            case 9:
                createOrder("Fedor", "Penin", 101);
                break;

            default:
                cout << "UNKNOWN COMMAND... " << endl;
                flag = false;
                break;
        }
    }
}

Hotel::~Hotel(){}


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

void Hotel :: addNewOrder () {
    string name;
    string surname;
    int roomNumber;

    cout << "write name: ";
    cin >> name;
    cout << "write surname: ";
    cin >> surname;
    cout << "write room number: ";
    cin >> roomNumber;

   createOrder(name, surname, roomNumber);
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


void Hotel::createOrder(string name, string surmane, int roomNumber) {
    Client * client = NULL;
    Room * room = NULL;

    // �������, ���������� �� ����� ������������ � �������
    for(vector<Client *>::iterator it = _clients.begin(); it != _clients.end(); ++it) {
        if (((*it) -> name == name) && ((*it) -> surname == surmane)) {
            client = (*it);
            break;
        }
    }

    // ������� ���������� �� ����� ��������
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

                // ������ �����
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


    showFilterCommands (); //showing commands

    bool fl = true;

    while (fl) {
        int command = 0;

        cout << endl << "Choose command: ";
        cin >> command; // ��� ����� �������� �� ���������! ����� ������� � �������!

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
            cout << "#" << (*it) -> number << ", " << (*it) -> bedsNumber << " beds, " << (*it) -> price << "$, " << (*it) -> isLuxery << endl;
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
}

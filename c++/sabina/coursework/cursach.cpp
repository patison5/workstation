#include <iostream>
#include <fstream>
#include <list>
#include "json.hpp"

using namespace std;
using json = nlohmann::json;

class Passport {
  public:
    int number;
    string dateOfUssue;
    string placeOfIssue;
    string placeOfResidence;

    Passport (int number, string date, string issuePlace, string residecePlace) {
      this -> number = number;
      this -> dateOfUssue = date;
      this -> placeOfIssue = issuePlace;
      this -> placeOfResidence = residecePlace;

    }

  void showPassportInfo () {
    cout << endl << "Passport number: "     << this -> number;
    cout << endl << "Date of Issue: "       << this -> dateOfUssue;
    cout << endl << "Place of Issue: "      << this -> placeOfIssue;
    cout << endl << "Place of residence: "  << this -> placeOfResidence;
    cout << endl;
  }
};


class People {
  private:
    int telephoneNumber;
    string name;
    string surname;
    Passport * passport = NULL;

  public:
    int id;

    People (int id, int number, string name, string surname, Passport * pass) {
      this -> id = id;
      this -> telephoneNumber = number;
      this -> name = name;
      this -> surname = surname;

      passport = pass;
    }

    int getPhone() {
      return this -> telephoneNumber;
    }
    string getName() {
      return this -> name;
    }
    string getSurname() {
      return this -> surname;
    }
    Passport * getPassport() {
      return this -> passport;
    }

    void showMySelf () {

      cout << endl << "Id: "            << this -> id;
      cout << endl << "Name: "          << this -> name;
      cout << endl << "Surname: "       << this -> surname;
      cout << endl << "Phone number: "  << this -> telephoneNumber;

      if (this -> passport != NULL) {
        this -> passport -> showPassportInfo();
      }
    }
};


void getElementByIndex(int index, list <People *> & listOfPeople) {
  for (auto iter = listOfPeople.begin(); iter != listOfPeople.end(); iter++) {
    if ((*iter) -> id == index) {
      (*iter) -> showMySelf();
      break;
    }
  }
}

void showPeople(list <People *> listOfPeople) {
  for (auto iter = listOfPeople.begin(); iter != listOfPeople.end(); iter++) {
    (*iter) -> showMySelf();
  }
}

void deletePeopleFromList(int id, list <People *> & listOfPeople) {
  for (auto iter = listOfPeople.begin(); iter != listOfPeople.end(); iter++) {
    if ((*iter) -> id == id) {
      cout << "deleting " << (*iter) -> id << endl;
      listOfPeople.remove((*iter));
      break;
    }
  }
}

void createNewElement (list <People *> & listOfPeople) {
  string Name;
  cout << "Name: ";
  cin >> Name;

  string Surname;
  cout << "Surname: ";
  cin >> Surname;

  int Phone;
  cout << "Phone number: ";
  cin >> Phone;

  int PassportNumber;
  cout << "PassportNumber: ";
  cin >> PassportNumber;

  string DateOfIssue;
  cout << "DateOfIssue: ";
  cin >> DateOfIssue;

  string PlaceOfIssue;
  cout << "PlaceOfIssue: ";
  cin >> PlaceOfIssue;

  string PlaceOfresidence;
  cout << "PlaceOfresidence: ";
  cin >> PlaceOfresidence;


  Passport * passport = new Passport(PassportNumber, DateOfIssue, PlaceOfIssue, PlaceOfresidence);
  People * people = new People(listOfPeople.size() + 1, Phone, Name, Surname, passport);

  listOfPeople.push_back(people);
}

void dumpObjects (json & jsonData, list <People *> & listOfPeople) {
  jsonData.clear();

  for (auto iter = listOfPeople.begin(); iter != listOfPeople.end(); iter++) {

    json j2 = {
      {"id", (*iter) -> id},
      {"name", (*iter) -> getName()},
      {"telephoneNumber", (*iter) -> getPhone()},
      {"surname", (*iter) -> getSurname()},
      {"passport", {
        {"number", (*iter) -> getPassport() -> number},
        {"dateOfIssue", (*iter) -> getPassport() -> dateOfUssue},
        {"placeOfIssue", (*iter) -> getPassport() -> placeOfIssue},
        {"placeOfResidence", (*iter) -> getPassport() -> placeOfResidence},
      }}
    };

    jsonData.push_back(j2);
  }
}

int main () {
  list <People *> listOfPeople;
  json jsonData;

  cout << endl << "************************************************************";
  cout << endl << "******************* HELLO MY DIAR FRIEND *******************";
  cout << endl << "************************************************************";
  cout << endl;

  string start = "N";
  cout << "Already have json file? (Y/N): ";
  cin >> start;

  if (start == "Y") {
    // read a JSON file
    ifstream data("pretty.json");

    if (data.peek() == std::ifstream::traits_type::eof()) {
      cout << endl << "File is empty! Would u like to use the default file? (Y/N)" << endl;
      string  q = "N";
      cin >> q;

      if (q == "Y") {
        ifstream data("people.json");
        data >> jsonData;
      } else {
        return 0;
      }
    } else {
      data >> jsonData;
    }
  } else {
    // read a JSON file
    ifstream data("people.json");
    data >> jsonData;
  }

  for (int i = 0; i < jsonData.size(); i++) {
    Passport * passport = new Passport(jsonData[i]["passport"]["number"], jsonData[i]["passport"]["dateOfIssue"], jsonData[i]["passport"]["placeOfIssue"], jsonData[i]["passport"]["placeOfResidence"]);
    People * people = new People(jsonData[i]["id"], jsonData[i]["telephoneNumber"], jsonData[i]["name"], jsonData[i]["surname"], passport);

    listOfPeople.push_back(people);
  }


  while (1) {

    cout << endl;
    cout << "<----------> COMMAND INFO <---------->" << endl;
    cout << "-1 - Exit without saving " << endl;
    cout << "0 - Save and exit " << endl;
    cout << "1 - Sort structure" << endl;
    cout << "2 - Sort structure and show the result" << endl;
    cout << "3 - Get element by index" << endl;
    cout << "4 - Delete element by index" << endl;
    cout << "5 - Show the hole structure" << endl;
    cout << "6 - Create new element" << endl;
    cout << "<----------> COMMAND INFO <---------->" << endl;
    cout << endl;

    string command = "0";

    cout << endl << "Write command: ";
    cin >> command;


    if (command == "-1") {
      break;
    } else if (command == "0") {
      dumpObjects(jsonData, listOfPeople);

      // write prettified JSON to another file
      std::ofstream o("pretty.json");
      o << jsonData << std::endl;

      break;
    } else if (command == "1") {
      listOfPeople.sort([](People * lhs, People * rhs) {return lhs->id < rhs->id;});
    } else if (command == "2") {
      cout << endl << "List before sorting: " << endl;
      showPeople(listOfPeople);
      listOfPeople.sort([](People * lhs, People * rhs) {return lhs->id < rhs->id;});
      cout << endl << "List after sorting: " << endl;
      showPeople(listOfPeople);
    } else if (command == "3") {
      cout << "Write index: ";
      int index = 0;
      cin >> index;

      if (index < listOfPeople.size())
        getElementByIndex(index, listOfPeople);
      else
        cout << "Error, index is higher then " << listOfPeople.size() << endl;

    } else if (command == "4") {
      cout << "Write index: ";
      int index = 0;
      cin >> index;

      if (index < listOfPeople.size())
        deletePeopleFromList(2, listOfPeople);
      else
        cout << "Error, index is higher then " << listOfPeople.size() << endl;
    } else if (command == "5") {
      showPeople(listOfPeople);
    } else if (command == "6") {
      createNewElement(listOfPeople);
    } else {
      break;
    }
  }

  return 0;
}

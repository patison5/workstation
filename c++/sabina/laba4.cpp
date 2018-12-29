#include <iostream>
#include <string>
#include <regex>

using namespace std;

int main () {
  // [a-zA-Z1-9-_] //любые буквы и цифры и тире с нижним подчеркиванием или точкой в имени пользователя
  // @             // собака обязательна
  // [a-zA-Z1-9-_] //любые буквы и цифры и тире
  // [a-zA-Z1-9-_] //любые буквы

  cmatch result;
  regex regular("([\\w-_\.]+)(@)([\\w-]+)(\.)([a-z]{2,5})");

  bool flag = true;
  while (flag) {
    string email = "";
    string str = "";

    cout << "Write Email: ";
    cin >> email;

    if (regex_match(email.c_str(), result, regular)) {
      cout << "true" << endl;
    } else {
      cout << "false" << endl;
    }

    cout <<  "Continue? (Y/N): ";
    cin >> str;

    if (str != "Y")
      break;
  }


  return 0;
}

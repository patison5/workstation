#include <iostream>
#include <string>

using namespace std;

int main () {
  cout << "hello Leonid!!!!" << endl;

  string tab = "";

  for (int i = 0; i < 5; i++) {
    tab = tab + " ";
    cout << tab << i << endl;
  }

  return 0;
}

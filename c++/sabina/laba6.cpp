#include <iostream>

using namespace std;

void readMassive(int N, int * array) {
  for (int i = 0; i < N; i++) {
      cout << "Write [" << i << "] elemnt: ";
      cin >> array[i];
  }
}

void writeMassive(int N, int * array) {
  for (int i = 0; i < N; i++) {
      cout << "[" << i << "]: " << array[i] << endl;
  }
}

int getSum (int N, int * array) {
  int sum = 0;

  for (int i = 0; i < N; i++) {
      if (i % 2 != 0)
        sum = sum + array[i];
  }

  return sum;
}

int main () {
  int N = 0;
  int sum = 0;

  cout << "Write size of massive: ";
  cin >> N;

  int * array = new int [N];

  readMassive(N, array);
  writeMassive(N, array);

  sum = getSum(N, array);

  cout << "result is " << sum << endl;

  return 0;
}

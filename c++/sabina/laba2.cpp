#include <iostream>

using namespace std;

int * insertFunction (int value, int pos, int N, int * array) {
    int * newMass = new int[N + 1];
    for (int i = 0, j = 0; j < N + 1; ++i, ++j) {
        if (i == pos) {
            newMass[j] = value;
            ++j;
        }
        
        newMass[j] = array[i];
    }

    return newMass;
}

int main () {

    int N = 0;

    cout << "Введите размер массива: ";
    cin >> N;

    int * array = new int [N];

    for (int i = 0; i < N; i++) {
        cout << "Введите [" << i << "] элемент: ";
        cin >> array[i];
    }

    int MAX = array[0];
    for (int i = 0; i < N; i++) {
        if (MAX < array[i])
            MAX = array[i];

    }
    
    cout << "MAX element is " << MAX << endl;

    int k = 0;

    while (k < N) {
        if (array[k] == MAX) {
            array = insertFunction(MAX, k, N, array);
            k+=2;
            N++;
        } else {
            k++;
        }
    }

    for (int i = 0; i < N; i++) {
        cout << "A[" << i << "]:" << array[i] << endl;
    }

    return 0;
}

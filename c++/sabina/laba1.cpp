#include <iostream>
#include <cmath>

using namespace std;

int main () {

    bool flag = true;
    int X = 0;
    int Y = 0;
    int radius = 0;
    int width  = 0;
    int height = 0;

    cout << "введите радиус окружности: ";
    cin >> radius;
    cout << "Введите длину прямоугольника: ";
    cin >> width;
    cout << "Введите высоту прямоугольника: ";
    cin >> height;

    while (flag) {
        string command = "N";

        cout << "Введите координату Х: ";
        cin >> X;
        
        cout << "Введите координату Y: ";
        cin >> Y;

        if (((X >= 0) && ((pow(X,2) + pow(Y,2)) <= pow(radius, 2))) || ((X < 0) && (abs(X) <= width) && (abs(Y) <= height))) {
            cout << "введенная точка попадает в область" << endl;
        } else {
            cout << "Введенная точка не попадает в область!" << endl;
        }

        cout << "Продолжить выполнение программы? (Y/N) ";
        cin >> command;

        if (command == "Y")
            flag = true;
        else {
           flag = false;
           break; 
        }
    }
    return 0;
}

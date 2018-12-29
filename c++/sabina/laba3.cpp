#include <iostream>

using namespace std;

int N = 3; //кол-во строк
int M = 4; //кол-во столбцов
int **MATRIX;

void render () {
  for (int i = 0; i < N; i++) {
    // идем по столбцам
    for (int j = 0; j < M; j++)
      cout << MATRIX[i][j] << " ";

    cout << endl;
  }
}

int main () {

    MATRIX = new int*[N];

    for(int i = 0; i < M; i++)
      MATRIX[i] = new int[M];

    // идем по строкам
    for (int i = 0; i < N; i++)
      // идем по столбцам
      for (int j = 0; j < M; j++)
        MATRIX[i][j] = 0;

    cout << endl;

    for (int i = 0; i < N; i++) {
      for (int j = 0; j < M; j++) {
          cout << "[" << i+1 << "][" << j+1 << "]: ";
          cin >> MATRIX[i][j];
      }
    }

    cout << endl;

    render();

    for (int i = 0; i < N; i++) {
      for (int j = 0; j < M; j++) {
        //соритировка.. если нужно поменять направление сортировки, в if меняешь на противоположный знак
        for (int w = 0; w < M; w++) {
          for (int q = 0; q < M; q++) {
            if (MATRIX[i][w] < MATRIX[i][q]) {
              int tmp = MATRIX[i][w];
              MATRIX[i][w] = MATRIX[i][q];
              MATRIX[i][q] = tmp;
            }
          }
        }
      }
    }

    cout << endl << "Sorted mass: " << endl;

    render();

    return 0;
}

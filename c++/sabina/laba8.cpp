#include <iostream>
#include "string.h"

using namespace std;



void render (int N, int M, int **MATRIX) {
  for (int i = 0; i < N; i++) {
    // идем по столбцам
    for (int j = 0; j < M; j++)
      cout << MATRIX[i][j] << " ";

    cout << endl;
  }
}

void render (int N, int M, string **MATRIX) {
  for (int i = 0; i < N; i++) {
    // идем по столбцам
    for (int j = 0; j < M; j++)
      cout << MATRIX[i][j] << " ";

    cout << endl;
  }
}

void sort (int N, int M, int **MATRIX) {
  for (int w = 0; w < N; w++) {
    for (int q = 0; q < N; q++) {
      if (MATRIX[w][0] < MATRIX[q][0]) {

        for (int l = 0; l < M; l++) {
          int tmp = MATRIX[w][l];
          MATRIX[w][l] = MATRIX[q][l];
          MATRIX[q][l] = tmp;
        }
      }
    }
  }
}

void sort (int N, int M, string **MATRIX) {
  for (int w = 0; w < N; w++) {
    for (int q = 0; q < N; q++) {
      int a = atoi(MATRIX[w][0].c_str());
      int b = atoi(MATRIX[q][0].c_str());

      if (a < b) {

        for (int l = 0; l < M; l++) {
          string tmp = MATRIX[w][l];
          MATRIX[w][l] = MATRIX[q][l];
          MATRIX[q][l] = tmp;
        }
      }
    }
  }
}

int main () {
  int N = 3; //кол-во строк
  int M = 4; //кол-во столбцов

  string typeOfMatrix = "0";

  cout << "Choose type of MATRIX: " << endl << "0 - exit \n1 - INTEGER\n2 - STRING" << endl;
  cin >> typeOfMatrix;

  if (typeOfMatrix == "1") {
    int **MATRIX;
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
    render(N, M, MATRIX);
    cout << endl;
    sort(N, M, MATRIX);
    cout << endl << "Sorted mass: " << endl;
    render(N, M, MATRIX);

  } else if (typeOfMatrix == "2") {
    string **MATRIX;
    MATRIX = new string*[N];

    for(int i = 0; i < M; i++)
      MATRIX[i] = new string[M];

    // идем по строкам
    for (int i = 0; i < N; i++)
      // идем по столбцам
      for (int j = 0; j < M; j++)
        MATRIX[i][j] = "0";

    cout << endl;

    for (int i = 0; i < N; i++) {
      for (int j = 0; j < M; j++) {
          cout << "[" << i+1 << "][" << j+1 << "]: ";
          cin >> MATRIX[i][j];
      }
    }

    cout << endl;
    render(N, M, MATRIX);
    cout << endl;
    sort(N, M, MATRIX);
    cout << endl << "Sorted mass: " << endl;
    render(N, M, MATRIX);

  }




  return 0;
}

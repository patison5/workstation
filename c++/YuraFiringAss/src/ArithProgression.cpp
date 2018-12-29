#include "ArithProgression.h"

ArithProgression::ArithProgression(double d, double A0) {
    this -> d = d;
    this -> A0 = A0;
}

ArithProgression::~ArithProgression() {}

double ArithProgression::findJ(int n) {
    double res = this -> A0 + n * this -> d;
    this -> Res1 = res;
    return res;
}

void ArithProgression::findSum(int n) {
    double S = (n + 1) * (findJ(0) + findJ(n)) / 2;
    this -> Res2 = S;
}

void ArithProgression::showInfo () {
    std::cout << "Arith: " << Res1 << ", Geom: " << Res2 << std::endl;
}


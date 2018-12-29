#include "GeomProgression.h"

GeomProgression::GeomProgression(double d, double A0) {
    this -> d = d;
    this -> A0 = A0;
}

GeomProgression::~GeomProgression() {}


double GeomProgression::findJ(int n) {
    double res = this -> A0 + n * this -> d;
    this -> Res1 = res;
    return res;
}

void GeomProgression::findSum(int n) {
    //тут формулу поменять на геометрическую и все
    double S = A0 * pow(d, n);
    this -> Res2 = S;
}

void GeomProgression::showInfo () {
    std::cout << "Arith: " << Res1 << ", Geom: " << Res2 << std::endl << std::endl;
}


#ifndef GEOMPROGRESSION_H
#define GEOMPROGRESSION_H

#include <MyMath.h>
#include <math.h>

using namespace std;


class GeomProgression : public MyMath {
    public:
        double d = 0;
        double A0 = 0;

        double Res1 = 0;
        double Res2 = 0;

        GeomProgression(double d, double A0);
        virtual ~GeomProgression();

        double findJ(int n);
        void findSum(int n);
        void showInfo ();

    protected:

    private:
};

#endif // GEOMPROGRESSION_H

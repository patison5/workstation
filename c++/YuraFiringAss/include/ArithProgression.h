#ifndef ARITHPROGRESSION_H
#define ARITHPROGRESSION_H

#include <MyMath.h>


class ArithProgression : public MyMath {
    public:

        double d = 0;
        double A0 = 0;

        double Res1 = 0;
        double Res2 = 0;

        ArithProgression(double d, double A0);
        virtual ~ArithProgression();

        double findJ(int n);
        void findSum(int n);
        void showInfo ();

    protected:

    private:
};

#endif // ARITHPROGRESSION_H

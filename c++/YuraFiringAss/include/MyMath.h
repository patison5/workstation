#ifndef MYMATH_H
#define MYMATH_H

#include <iostream>
#include <vector>

class MyMath {
    public:
        std::vector <MyMath *> _elements;

        MyMath();
        virtual ~MyMath();
        virtual void findJ();
        virtual void showInfo ();

        void addElementToVector(MyMath * el);

    protected:

    private:
};

#endif // MYMATH_H

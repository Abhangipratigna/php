#include <iostream>
using namespace std;
class Triangle
{
private:
    double sides1, sides2, sides3;

public:
    Triangle(double sides1_, double sides2_, double sides3_)
    {
        sides1 = sides1_;
        sides2 = sides2_;
        sides3 = sides3_;
    }
    void determineType()
    {
        if (sides1 == sides2 && sides2 == sides3)
        {
            cout << "Equilateral Triangle :" << endl;
        }
        else if (sides1 == sides2 || sides1 == sides3 || sides2 == sides3)
        {
            cout << "isosceles Triangle :" << endl;
        }
        else
        {
            cout << "scalene Triangle :" << endl;
        }
    }
};
int main()
{
    double sides1, sides2, sides3;
    cout << "Input the lengths of the three sides of the triangle :";
    cout << "\nsides1 :";
    cin >> sides1;
    cout << "sides2 :";
    cin >> sides2;
    cout << "sides3 :";
    cin >> sides3;
    Triangle Triangle(sides1, sides2, sides3);
    Triangle.determineType();
    return 0;
}

#include <iostream>
using namespace std;

class Overloading
{
public:
    int Add(int A, int B)
    {
        cout << "Addition:" << A + B << endl;
    }

    int Sub(int A, int B)
    {
        cout << "Subtraction:" << A - B << endl;
    }

    int Mul(int A, int B)
    {
        cout << "Multiplication:" << A * B << endl;
    }

    float div(float A, float B)
    {
        cout << "divison:" << A / B << endl;
    }
};

int main()
{
    int num1, num2;
    cout << "Enter your num1:";
    cin >> num1;
    cout << "Enter your num2:";
    cin >> num2;

    Overloading O1;
    O1.Add(num1, num2);
    O1.Sub(num1, num2);
    O1.Mul(num1, num2);
    O1.div(num1, num2);
}
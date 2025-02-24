
#include <iostream>
using namespace std;

class calculator
{
    int num1;
    int num2;

public:
    calculator(int n1, int n2)
    {
        num1 = n1;
        num2 = n2;
    }
    int sum()
    {
        return num1 + num2;
    }
    int mul()
    {
        return num1 * num2;
    }
    int sub()
    {
        return num1 - num2;
    }
    float mod()
    {
        return num1 % num2;
    }
    int div()
    {
        return num1 / num2;
    }
};

int main()
{
    calculator c1(20, 30);
    cout << c1.sum() << endl;
    cout << c1.mul() << endl;
    cout << c1.sub() << endl;
    cout << c1.mod() << endl;
    cout << c1.div() << endl;
}

#include <iostream>

using namespace std;

class Number
{
    int num1, num2;

public:
    Number(int n1, int n2)
    {
        num1 = n1;
        num2 = n2;
    }

    friend void findMaximum(Number);
};

void findMaximum(Number n)
{

    if (n.num1 > n.num2)
        cout << "one is maximum ";
    else
        cout << "two is maximum ";
};

int main()
{

    int num1, num2;
    cout << "Enter your num1 =";
    cin >> num1;
    cout << "Enter your num2 =";
    cin >> num2;

    Number n(num1, num2);
    findMaximum(n);

    return 0;
}
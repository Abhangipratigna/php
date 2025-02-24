#include <iostream>
using namespace std;
int num1;
int num2;
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
int div()
{
    return num1 / num2;
}
int main()
{
    cout << "enter your number :" << endl;
    cin >> num1;
    cout << "enter your number :" << endl;
    cin >> num2;
    cout << "sum :" << sum() << endl;
    cout << "mul :" << mul() << endl;
    cout << "sub :" << sub() << endl;
    cout << "div:" << div() << endl;
}

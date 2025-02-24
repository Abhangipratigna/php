#include <iostream>
using namespace std;
class BankAccount
{
    int Accountnumber;
    float Balance;

public:
    BankAccount(int Accountnumber_, float Balance_)
    {
        Accountnumber = Accountnumber_;
        Balance = Balance_;
    }
    void deposit()
    {
        float deposit;
        cout << "Enter your deposit :";
        cin >> deposit;
        Balance += deposit;
    }
    void withdraw()
    {
        float withdraw;
        cout << "Enter your withdraw :";
        cin >> withdraw;
        Balance -= withdraw;
    }
    void display()
    {
        cout << "\nBalance :" << Balance;
    }
};
int main()
{
    int Accountnumber_;
    float Balance_;
    cout << "Enter your Accountnumber :";
    cin >> Accountnumber_;
    cout << "Enter your Balance :";
    cin >> Balance_;
    BankAccount Bank(Accountnumber_, Balance_);
    Bank.deposit();
    Bank.withdraw();
    Bank.display();
    return 0;
}
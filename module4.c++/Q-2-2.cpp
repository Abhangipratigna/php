#include <iostream>
#include <string.h>
using namespace std;
class BankAccount
{
    string namedepositor;
    int accountnumber;
    string accounttype;
    float Balance;

public:
    BankAccount(string namedepositor_, int accountnumber_, string accounttype_, float Balance_)
    {
        namedepositor = namedepositor_;
        accountnumber = accountnumber_;
        accounttype = accounttype_;
        Balance = Balance_;
    }
    void deposit()
    {
        int deposit;
        cout << "Enter of deposit Amount :";
        cin >> deposit;
        Balance += deposit;
    }
    void withdraw()
    {
        int withdraw;
        cout << "Enter of withdraw Amount =";
        cin >> withdraw;
        if (withdraw > Balance)
            cout << "\ncannot Withdraw Amount =";
        Balance -= withdraw;
    }
    void display()
    {
        cout << "\nenter of namedepositor :" << namedepositor;
        cout << "\nenter of accountnumber :" << accountnumber;
        cout << "\nenter of account type :" << accounttype;
        cout << "\nenter of Balance :" << Balance;
    }
};
int main()
{
    string namedepositor_;
    int accountnumber_;
    string accounttype_;
    float Balance_;
    cout << "\nname :";
    cin >> namedepositor_;
    cout << "accountnumber :";
    cin >> accountnumber_;
    cout << "account type :";
    cin >> accounttype_;
    cout << "Balance :";
    cin >> Balance_;
    BankAccount Bank(namedepositor_, accountnumber_, accounttype_, Balance_);
    Bank.deposit();
    Bank.withdraw();
    Bank.display();
    return 0;
}
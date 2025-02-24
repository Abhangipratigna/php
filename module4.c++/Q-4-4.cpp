#include <iostream>
using namespace std;
class student
{
public:
    string name;
    int rollnumber;
    void get()
    {
        cout << "Enter the name :" << endl;
        cin >> name;
        cout << "Enter the rollnumber :" << endl;
        cin >> rollnumber;
    }
};
class mark
{
public:
    int mark[4], i;
    void in()
    {
        cout << "Enter the marks :" << endl;
        for (i = 0; i < 4; i++)
        {
            cin >> mark[i];
        }
    }
};
class process : public student, public mark
{
public:
    int total;
    float average;
    void calculate()
    {
        total = mark[0] + mark[1] + mark[2] + mark[3];
        average = total / 10;
    }
    void display()
    {
        cout << "Name :" << name << endl;
        cout << "Rollnumber :" << rollnumber << endl;
        cout << "Marks :";
        for (i = 0; i < 4; i++)
        {
            cout << mark[i] << " mark";
        }
        cout << endl;
        cout << "Total marks :" << total << endl;
        cout << "Average :" << average << endl;
    }
};
int main()
{
    process v;
    v.get();
    v.in();
    v.calculate();
    v.display();
    return 0;
}

#include <iostream>
using namespace std;
class student
{
public:
    int rollno;
    student(int rollno) : rollno(rollno) {}
    int getrollno()
    {
        return rollno;
    }
};
class test : public student
{
public:
    int mark1;
    int mark2;
    test(int rollno, int mark1, int mark2) : student(rollno), mark1(mark1), mark2(mark2) {}
    int totalmark()
    {
        return mark1 + mark2;
    }
};
class result : public test
{
public:
    result(int rollno, int mark1, int mark2) : test(rollno, mark1, mark2) {}
    void displayresult()
    {
        cout << "roll no : " << getrollno() << endl;
        cout << "mark1 : " << mark1 << endl;
        cout << "mark2 : " << mark2 << endl;
        cout << "total Mark : " << totalmark() << endl;
    }
};
int main()
{
    int rollno, mark1, mark2;
    cout << "Enter Roll No : ";
    cin >> rollno;
    cout << "Enter Mark1 : ";
    cin >> mark1;
    cout << "Enter Mark2 : ";
    cin >> mark2;
    result s1(rollno, mark1, mark2);
    s1.displayresult();
    return 0;
}

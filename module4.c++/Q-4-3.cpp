#include <iostream>
using namespace std;
class person
{
public:
    string name;
    int age;
    person(string n, int a)
    {
        name = n;
        age = a;
    }
    void readdata()
    {
        cout << "Enter name: ";
        cin >> name;
        cout << "Enter age: ";
        cin >> age;
    }
    void writedata()
    {
        cout << "Name: " << name << endl;
        cout << "Age: " << age << endl;
    }
};
class student : public person
{
public:
    double percentage;
    student(string n, int a, double p) : person(n, a)
    {
        percentage = p;
    }
    void readdata()
    {
        person::readdata();
        cout << "Enter Percentage: ";
        cin >> percentage;
    }
    void writedata()
    {
        person::writedata();
        cout << "Percentage" << percentage << endl;
        ;
    }
};
class teacher : public person
{
public:
    double salary;
    teacher(string n, int a, double s) : person(n, a)
    {
        salary = s;
    }
    void readdata()
    {
        person::readdata();
        cout << "Enter Salary: ";
        cin >> salary;
    }
    void writedata()
    {
        person::writedata();
        cout << "salary" << salary << endl;
    }
};
int main()
{
    student stu("Niraj", 23, 80);
    teacher t1("Ajay", 21, 90000);
    cout << endl;
    stu.readdata();
    cout << endl;
    stu.writedata();
    cout << endl;
    t1.readdata();
    cout << endl;
    t1.writedata();
    return 0;
}

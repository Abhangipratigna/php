#include <iostream>
using namespace std;

class Employee
{
public:
    Employee(string name, int id, double salary)
    {
        this->name = name;
        this->id = id;
        this->salary = salary;
    }

    void displayinfo()
    {
        cout << "Name: " << name << endl;
        cout << "ID: " << id << endl;
        cout << "Salary: " << salary << endl;
    }

protected:
    string name;
    int id;

private:
    double salary;
};

class manager : public Employee
{
public:
    manager(string name, int id, double salary, string department) : Employee(name, id, salary)
    {
        this->department = department;
    }

    void displayinfo()
    {
        Employee::displayinfo();
        cout << "Department: " << department << endl;
    }

private:
    string department;
};

int main()
{
    Employee emp("Ajay", 5, 80000);
    emp.displayinfo();

    manager mg("Niraj", 05, 700000, "master of business Adiministration");
    mg.displayinfo();

    return 0;
}
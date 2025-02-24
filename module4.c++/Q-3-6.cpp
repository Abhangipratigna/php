#include <iostream>
#include <string>
using namespace std;
class Employee
{
private:
    string name;
    int employeeId;
    float salary;

public:
    Employee(string name_, int employeeId_, double salary_)
    {
        name = name_;
        employeeId = employeeId_;
        salary = salary_;
    }
    void calculatsalary(double performanceRating)
    {
        if (performanceRating >= 0.0 && performanceRating <= 1.6)
        {
            salary *= performanceRating;
        }
        else
        {
            cout << "Invalid performance rating. Salary remains unchanged." << endl;
        }
    }
    void setSalary(double Salary)
    {
        salary = salary;
    }
    string getName()
    {
        return name;
    }
    int getEmployeeId()
    {
        return employeeId;
    }
    float getsalary()
    {
        return salary;
    }
};
int main()
{
    string name;
    int employeeId;
    float salary;
    cout << "Enter your name: ";
    cin >> name;
    cout << "Enter your employeeID:";
    cin >> employeeId;
    cout << "Enter your  salary:";
    cin >> salary;
    Employee Employee(name, employeeId, salary);
    cout << "salary : " << Employee.getsalary();
    float performanceRating;
    cout << "\nEnter performanceRating :";
    cin >> performanceRating;
    Employee.calculatsalary(performanceRating);
    cout << "upated salary :" << Employee.getsalary();
    return 0;
}

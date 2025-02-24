#include <iostream>
#include <string>
using namespace std;
class Student
{
private:
    string Name;
    string studentClass;
    int rollNumber;
    float marks;

public:
    Student(string Name_, string studentClass_, int rollNumber_, float marks_)
    {
        Name = Name_;
        studentClass = studentClass_;
        rollNumber = rollNumber_;
        marks = marks_;
    }
    string calculateGrade()
    {
        if (marks >= 90)
        {
            return "A+";
        }
        else if (marks >= 80)
        {
            return "A";
        }
        else if (marks >= 70)
        {
            return "B";
        }
        else if (marks >= 60)
        {
            return "C";
        }
        else
        {
            return "D";
        }
    }
    void displyinformation()
    {
        cout << "Name :" << Name << std::endl;
        cout << "class :" << studentClass << std::endl;
        cout << "rollnumber :" << rollNumber << std::endl;
        cout << "marks :" << marks << std::endl;
        cout << "grade :" << calculateGrade() << std::endl;
    }
};
int main()
{
    string studentName;
    string studentclass;
    int rollnumber;
    float studentmarks;
    cout << "student details :";
    cout << "\nName :";
    getline(cin, studentName);
    cout << "class :";
    getline(cin, studentclass);
    cout << "rollnumber :";
    cin >> rollnumber;
    cout << "Marks (0-100) :";
    cin >> studentmarks;
    Student student(studentName, studentclass, rollnumber, studentmarks);
    student.displyinformation();
    return 0;
}

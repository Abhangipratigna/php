#include <iostream>
#include <string>
using namespace std;
class Person
{
    string name, country;
    int age;

public:
    void setName(string n)
    {
        name = n;
    }
    string getName()
    {
        return name;
    }
    void setAge(int a)
    {
        age = a;
    }
    int getAge()
    {
        return age;
    }
    void setCountry(string c)
    {
        country = c;
    }
    string getCountry()
    {
        return country;
    }
};
int main()
{
    Person p;
    p.setName("Niraj chudasama");
    p.setAge(23);
    p.setCountry("USA");
    cout << "Name: " << p.getName() << endl;
    cout << "Age: " << p.getAge() << endl;
    cout << "Country: " << p.getCountry() << endl;
    return 0;
}
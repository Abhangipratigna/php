#include <iostream>
using namespace std;
class circle
{
private:
    float redius;

public:
    float calculateArea()
    {
        return 3.14 * redius * redius;
    }
    float calculateCircumference()
    {
        return 2 * 3.14 * redius;
    }
};
int main()
{
    float redius, calculateArea, calculateCircumference;
    cout << "enter redius of cricle :";
    cin >> redius;
    calculateArea = 3.14 * redius * redius;
    cout << "\nArea :" << calculateArea;
    calculateCircumference = 2 * 3.14 * redius;
    cout << "\nCircumference:" << calculateCircumference;
    return 0;
}
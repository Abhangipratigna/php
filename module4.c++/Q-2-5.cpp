#include <iostream>
using namespace std;
class Rectangle
{
private:
    double length;
    double width;

public:
    Rectangle(double len, double wid) : length(len), width(wid) {}
    double calculateArea()
    {
        return length * width;
    }
    double calculatePerimeter()
    {
        return 2 * (length + width);
    }
};
int main()
{
    double length, width;
    cout << "Input the length of the rectangle : ";
    cin >> length;
    cout << "\nInput the width of the rectangle : ";
    cin >> width;
    Rectangle rectangle(length, width);
    double area = rectangle.calculateArea();
    cout << "\nArea: " << area << std::endl;
    double perimeter = rectangle.calculatePerimeter();
    cout << "Perimeter: " << perimeter << std::endl;
    return 0;
}
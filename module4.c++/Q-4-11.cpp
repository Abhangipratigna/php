#include <iostream>
using namespace std;

float arearectangle(float length, float breadth)
{
    return length * breadth;
}

float areatriangle(float base, float height)
{
    return 0.5 * base * height;
}

float pi = 3.14;
float areacircle(float radius)
{
    return pi * radius * radius;
}

int main()
{
    float length, breadth, base, height, radius;

    cout << "Enter length and breadth for Rectangle: ";
    cin >> length >> breadth;
    cout << "Area of rectangle " << arearectangle(length, breadth) << endl;

    cout << "\nEnter base and height for triangle: ";
    cin >> base >> height;
    cout << "Area of triangle " << areatriangle(base, height) << endl;

    cout << "\nEnter radius for Circle: ";
    cin >> radius;
    cout << "Area of circle " << areacircle(radius) << endl;

    return 0;
}
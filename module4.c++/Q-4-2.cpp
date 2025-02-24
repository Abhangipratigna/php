#include <iostream>
using namespace std;
class Rectangle
{
public:
    int width = 50;
    void getwidth()
    {
        cout << "\nwidth:" << width;
    }
};
class Rectangle1 : public Rectangle
{
public:
    int height = 40;
    int result = width * height;
    void getheight()
    {
        cout << "\nheight :" << height;
    }
    void getresult()
    {
        cout << "\nresult:" << result;
    }
};
int main()
{
    Rectangle1 Rec;
    Rec.getwidth();
    Rec.getheight();
    Rec.getresult();
}
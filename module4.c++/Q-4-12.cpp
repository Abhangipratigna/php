#include <iostream>
using namespace std;

class Swap
{
public:
    int x, y;
    void getData()
    {
        cout << "Enter numbers for swapping:" << endl;
        cin >> x;
        cout << "Enter number for swapping:" << endl;
        cin >> y;
    }
    friend void swap(int x, int y);
};

void swap(Swap s)
{
    s.x = s.x + s.y;
    s.y = s.x - s.y;
    s.x = s.x - s.y;
}
void Display(int x, int y)
{
    cout << "\nAfter swapping : " << endl;
    cout << "x = " << x << endl;
    cout << "y = " << y << endl;
};

int main()
{
    int x, y;

    Swap S1;
    S1.getData();
    swap(S1.x, S1.y);
    Display(S1.x, S1.y);
}
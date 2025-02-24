#include <iostream>
using namespace std;

class Matrix
{
    int a[3][3];

public:
    int matrix()
    {
        int i;
        cout << "\nEnter matrix Element (3 * 3):\n";
        for (int i = 0; i < 3; i++)
        {
            for (int j = 0; j < 3; j++)
            {
                cin >> a[i][j];
            }
        }
    }
    int display()
    {
        for (int i = 0; i < 3; i++)
        {
            for (int j = 0; j < 3; j++)
            {
                cout << a[i][j] << "\t";
            }
            cout << "\n";
        }
    }
    int operator+(Matrix c)
    {
        int mat[3][3];
        for (int i = 0; i < 3; i++)
        {
            for (int j = 0; j < 3; j++)
            {
                mat[i][j] = a[i][j] + c.a[i][j];
            }
        }
        cout << "\n Addition of Matrix : \n\n";
        for (int i = 0; i < 3; i++)
        {
            cout << " ";
            for (int j = 0; j < 3; j++)
            {
                cout << mat[i][j] << "\t";
            }
            cout << "\n";
        }
    }
};
int main()
{
    Matrix a, b;
    a.matrix();
    b.matrix();

    cout << "\n First Matrix : \n\n";
    a.display();
    cout << "\n Second Matrix : \n\n";
    b.display();
    a + b;

    return 0;
}
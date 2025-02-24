#include <iostream>
using namespace std;

#define N 5
template <class T>

void sort(T arr[], int size)
{
    for (int i = 0; i < size; i++)
    {
        for (int j = i + 1; j < size; j++)
        {
            if (arr[i] > arr[j])
            {
                T temp;
                temp = arr[i];
                arr[i] = arr[j];
                arr[j] = temp;
            }
        }
    }
}

int main()
{
    int int_array[N];

    cout << "Enter your sort array =" << endl;
    for (int i = 0; i < N; i++)
    {
        cin >> int_array[i];
    }

    sort(int_array, N);

    cout << "sort the array =" << endl;
    for (int i = 0; i < N; i++)
    {
        cout << int_array[i] << ", ";
    }

    return 0;
}
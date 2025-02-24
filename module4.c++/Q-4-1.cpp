#include <iostream>
using namespace std;
class cricketer
{
public:
    void inputdata()
    {
    }
    void displaydata()
    {
        cout << "cricketer name: hardik pandya" << endl;
    }
};
class batsman : public cricketer
{
public:
    int totalrun;
    int averagerun;
    int bestperformance;
    void inputdata()
    {
        cricketer::inputdata();
        cout << "Enter total run:";
        cin >> totalrun;
        cout << "Enter averagerun:";
        cin >> averagerun;
        cout << "Enter best performance:";
        cin >> bestperformance;
    }
    void calculateaverage()
    {
    }
    void displaydata()
    {
        cricketer::displaydata();
        cout << "total run:" << totalrun << endl;
        cout << "Average run:" << averagerun << endl;
        cout << "best performance:" << bestperformance << endl;
    }
};
int main()
{
    batsman bat;
    bat.inputdata();
    bat.calculateaverage();
    bat.displaydata();
    return 0;
}

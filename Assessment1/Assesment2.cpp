#include <iostream>
#include <ctime>
#include <cstdlib>

using namespace std;

int comchoice();
int userchoice();

int c_choice;
int u_choice;

int rounds = 0;
int u_score = 0;
int c_score = 0;

// name and choice rounds
int main()
{
    string name;
    int choice;

    char user;
    cout << "*--*--*--*--*--*--*--*--*--*--" << endl;
    cout << "name";

    cout << "\n*--*--*--*--*--*--*--*--*--*--" << endl;
    cout << "Enter your name: ";
    cin >> name;

    cout << "\n*--*--*--*--*--*--*--*--*--*--" << endl;
    cout << "ROUNDS";
    cout << "\n*--*--*--*--*--*--*--*--*--*--" << endl;

    cout << name << " How Many Rounds you want to Play? :";
    cin >> rounds;

    cout << "\n*--*--*--*--*--*--*--*--*--*--" << endl;
    cout << "GAME";
    cout << "\n*--*--*--*--*--*--*--*--*--*--" << endl;

    // using loop userchoice and comchoice gameing rounds
    for (int i = 0; i < rounds; i++)
    {
        int uc, cc;
        cout << "\nRound No :" << i << "/" << rounds;

        cout << "\nSatyam's Score = " << u_score << endl;
        cout << "\nComputer Score = " << c_score << endl;

        uc = userchoice();
        cc = comchoice();

        cout << "\n select your choice : " << uc << endl;
        cout << "Computer choice is: " << cc << endl;

        cout << "\n*--*--*--*--*--*--*--*--*--*--" << endl;

        // user winner and looser print
        if (uc == 1 && cc == 2)
        {
            cout << "User Win" << endl;
            u_score++;
        }
        else if (uc == 2 && cc == 3)
        {
            cout << "User Win" << endl;
            u_score++;
        }
        else if (uc == 3 && cc == 1)
        {
            cout << "User Win" << endl;
            u_score++;
        }
        else if (uc == cc)
        {
            cout << "Draw" << endl;
        }
        else
        {
            cout << "Loose" << endl;
            c_score++;
        }
    }
    // computer score print
    srand(time(0));

    cout << "-------------Score----------" << endl;
    cout << "User score: " << u_score << endl;
    cout << "Computer score: " << c_score << endl;

    return 0;
}
// computer choice maxvalue and minimum value
int comchoice()

{
    const int max_value = 3;
    const int min_value = 1;

    c_choice = (rand() % (max_value - min_value + 1) + min_value);

    return c_choice;
}
// official rules rock ,paper and scissor print
int userchoice()
{
    cout << "1) ROCK" << endl;
    cout << "2) PAPER" << endl;
    cout << "3) SCISSOR" << endl;

    cout << "\nSelect your choice :";
    cin >> u_choice;

    cout << "\n*--*--*--*--*--*--*--*--*--*--" << endl;

    cout << "\nDraw";
    cout << "\npress Any key to continue...." << endl;

    return u_choice;
}
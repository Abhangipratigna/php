#include <iostream>
using namespace std;

class mystring
{
public:
    string str;

    mystring(string s) : str(s) {}

    mystring operator+(mystring a)
    {
        return mystring(str + a.str);
    }

    friend ostream &operator<<(ostream &ostream, const mystring &mystring)
    {
        return ostream << mystring.str;
    }
};

int main()
{
    mystring str1("My name is ");
    mystring str2("pratigna");

    mystring result = str1 + str2;

    cout << result << endl;

    return 0;
}
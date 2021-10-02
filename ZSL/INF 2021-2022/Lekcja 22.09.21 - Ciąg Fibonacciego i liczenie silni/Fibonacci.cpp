#include <iostream>
using namespace std;

long long Fibbonacci(int n)
{
    long long a=0, b=1;
    for (int i=0; i<n; i++)
    {
        cout<<b<<"\t";
        b = b+a;
        a = b-a;
    }
}
int main(){
    int n = 50;
    Fibbonacci(n);
    return 0;
}

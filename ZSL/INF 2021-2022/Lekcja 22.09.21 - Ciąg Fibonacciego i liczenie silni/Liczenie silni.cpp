#include <iostream>         //Obliczanie silni
using namespace std;

int main() {
    int a, i, b=1;
    cout<<"Podaj liczbe silni"<<endl;
    cin >> a;
    cout<<"Obliczam " <<a<<"!"<<endl;
    for(int i=a;i>1;i--) {
        b=b*i;
    }
    cout<<a<<"!"<<"="<<b<<endl;
    return 0;
}

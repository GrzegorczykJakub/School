#include<bits/stdc++.h>
using namespace std;

int main(){
    int x =1, a, z=1;
    while (x<100000){
        cin >> a;
        if (a>=316){
            z=z++;
        }
        x = x*a;
    }
    cout << x<<endl;
    cout << z;
    return 0;
}
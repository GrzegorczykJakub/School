#include <iostream>
#include <bits/stdc++.h>
using namespace std;
void hashMap(int ciag[], int size) {
    map<int, int> m;
    for(int i = 0; i < size; i++)
        m[ciag[i]]++;
    int count = 0;
    for(auto i:m) {
        if (i.second > size / 2) {
            count = 1;
            cout << "Lider wynosi: " << i.first << endl;
            break;
        }
    }
    if (count == 0) {
            cout << "Ciag nie zawiera lidera" << endl;
    }
}
int main(){
    int ciag[] = {3, 7, 7, 7, 4, 7, 7, 7, 7, 7, 7, 6, 7, 7, 7, 3, 7, 1};
    int n = sizeof(ciag)/sizeof(ciag[0]);
    hashMap(ciag, n);
    return 0;
}

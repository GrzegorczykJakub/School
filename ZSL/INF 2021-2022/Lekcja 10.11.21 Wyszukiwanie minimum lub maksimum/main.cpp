#include <iostream>
#include <bits/stdc++.h>
using namespace std;
int main()
{
    int array[]={1,6,1,2,2,5,2,4,7,12,365,61,13,123,671,2,651,2,31,0,245,13,14141};
    int n = sizeof(array) / sizeof(array[0]);

    cout << "\nMinimal Element = " << *min_element(array, array + n);
    cout << "\nMaximal Element = " << *max_element(array, array + n);
    return 0;
}

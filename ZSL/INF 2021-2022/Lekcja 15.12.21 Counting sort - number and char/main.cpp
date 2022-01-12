
#include <bits/stdc++.h>
#include <string.h>
using namespace std;
#define RANGE 255

void sort_function(char array_1[])
{
    char output[strlen(array_1)];

    int count[RANGE + 1], i;
    memset(count, 0, sizeof(count));

    for (i = 0; array_1[i]; ++i)
        ++count[array_1[i]];

    for (i = 1; i <= RANGE; ++i)
        count[i] += count[i - 1];

    for (i = 0; array_1[i]; ++i) {
        output[count[array_1[i]] - 1] = array_1[i];
        --count[array_1[i]];
    }
    for (i = 0; array_1[i]; ++i)
        array_1[i] = output[i];
}

int main()
{
    char array_1[] = {};
    cin >> array_1;
    sort_function(array_1);

    cout << "Sorted:" << array_1;
    return 0;
}


//cyfry


//#include <algorithm>
//#include <iostream>
//#include <vector>
//using namespace std;
//
//void sort_function_numbers(vector<int>& array_2)
//{
//    int max = *max_element(array_2.begin(), array_2.end());
//    int min = *min_element(array_2.begin(), array_2.end());
//    int range = max - min + 1;
//
//    vector<int> count(range), output(array_2.size());
//    for (int i : array_2)
//        count[i - min]++;
//
//    for (int i = 1; i < count.size(); i++)
//        count[i] += count[i - 1];
//
//    for (int i = array_2.size() - 1; i >= 0; i--) {
//        output[count[array_2[i] - min] - 1] = array_2[i];
//        count[array_2[i] - min]--;
//    }
//
//    for (int i = 0; i < array_2.size(); i++)
//        array_2[i] = output[i];
//}
//
//void printarray_2(vector<int>& array_2)
//{
//    for (int i : array_2)
//        cout << i << " ";
//    cout << "\n";
//}
//
//int main()
//{
//    vector<int> array_2;
//    int a;
//    for(int i=0;i<10;i++)
//    {
//        cin>>a;
//        array_2.push_back(a);
//    }
//    sort_function_numbers(array_2);
//    printarray_2(array_2);
//    return 0;
//}
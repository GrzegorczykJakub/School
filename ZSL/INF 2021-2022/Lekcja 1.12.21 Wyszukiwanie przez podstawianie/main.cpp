#include <iostream>

using namespace std;
   void print_array(int unsorted[], int size){
       for (int i = 0; i< size; i++){
           cout << unsorted[i] << "  ";
       }
       cout << endl;
   }
   void sorting(int unsorted[], int size){
       for (int step = 0; step < size; step++){
           int a = unsorted[step];
           int b = step -1;
           while (a < unsorted[b] && b >= 0){
               unsorted[b+1] = unsorted[b];
               --b;
           }
           unsorted[b+1] = a;
       }
   }

int main() {
    int unsorted [] = {7, 5, 11, 2, 6, 7, -2, 14, 43, 1, 1, 6};
    int size = sizeof(unsorted)/sizeof(unsorted[0]);
    cout <<"Unsorted: ";
    print_array(unsorted, size);
    sorting(unsorted, size);
    cout << "\n\nSorted: ";
    print_array(unsorted, size);
   return 0;
}

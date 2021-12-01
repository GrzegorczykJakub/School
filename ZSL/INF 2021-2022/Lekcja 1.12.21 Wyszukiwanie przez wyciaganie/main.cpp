#include <iostream>

using namespace std;
void print_array(int array[], int size){
    for (int i=0; i<size; i++){
        cout << array[i]<<" ";
    }
    cout << endl;
}
void swapping(int *a, int *b){
    int help = *a;
    *a = *b;
    *b = help;
}
void sorting(int array[], int size){
    for (int step = 0; step < size - 1; step++){
        int minimal_index = step;
        int i;
        for (i = step + 1; i < size; i++){
            if (array[i]< array[minimal_index]) minimal_index = i;
        swapping(&array[minimal_index], &array[step]);
        }
    }
}
int main() {
    int array[] = {6, 7, 13, 43, 11, 9, -2, 4, 43, 1, 2, 3, 1, -4, -5};
    int size = sizeof(array)/sizeof(array[0]);
    cout << "Unsorted:";
    print_array(array, size);
    cout <<"\n\n"<<endl;
    sorting(array, size);
    cout << "Sorted:";
    print_array(array, size);
    return 0;
}

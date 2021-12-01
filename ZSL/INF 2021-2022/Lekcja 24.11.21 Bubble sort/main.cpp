#include <iostream>
using namespace std;
void bubble_sort(int ciag[], int size){
    for (int a = 0; a < (size-1); a++) {
        for (int i = 0; i < size - (a - 1); i++) {
            if (ciag[i] > ciag[i + 1]) {
                int pomocnicza = ciag[i];
                ciag[i] = ciag[i + 1];
                ciag[i + 1] = pomocnicza;
            }
        }
    }
}
void print_sorted(int ciag[], int size){
    for (int x = 0; x<size; x++) {
        cout<< ciag[x]<<endl;
    }
}
int main() {
    int tablica[]={7, 13, 21, 2, 8, 6, 9, 5, 7};
    int rozmiar = sizeof(tablica)/sizeof(tablica[0]);
    for (int z = 0; z<rozmiar; z++ ){
        cout <<" "<< tablica[z] <<" ";
    }
    cout <<"\n"<<endl;
    bubble_sort(tablica, rozmiar);
    print_sorted(tablica, rozmiar);
}

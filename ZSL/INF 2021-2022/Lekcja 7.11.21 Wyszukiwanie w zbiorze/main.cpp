#include <iostream>

using namespace std;

int main()
{
    int array[23]={1,2,6,1,2,5,2,4,7,122,12365,123,671,2,61,2,651,2,31,0,221,92,0};
    int a, i=0;
    cout << "Dany jest ciag liczb: ";
    do{
        cout << array[i] << " ";
        i++;
    }while(i<22);
    i=0;
    cout  << "\nPodaj szukana liczbe: "; cin >> a;
    array[22]=a;
    do{
        if(array[i]==a){
                if(i==22){
                    cout << "Tej liczby nie ma w ciagu";
                    return 0;
                }
            cout << "Szukana wartosc znajduje sie na miejscu: " << ++i;
            return 0;}

    i++;
    }while(true);

    return 0;
}

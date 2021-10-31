#include <iostream>
#include <fstream>

using namespace std;
int main() {
        fstream f1;
        fstream f2;
        f1.open("f1.txt", ios_base::out | ios_base::app);
        int i = 0;

        //generating set of numbers and saving them to f1

        do{
            f1 << i << std::endl;
            i++;
        }while(i<21);   //zapisywanie w pliku liczb od 0 do 20
        f1.close();

        //reading f1 file and saving items that passed if to f2

        f1.open("f1.txt", ios_base::in);
        string s1;
        getline(f1, s1);
        while (!f1.eof()){
            cout << s1 <<endl;
            string a;
            int x;
            x = stoi(s1);
            if (x%7!=0){
                f2.open("f2.txt", ios_base::out | ios_base::app);
                f2 << x << endl;
                f2.close();
            }
            else {}
            getline(f1, s1);
        }
        f2.close();
        f1.close();

        //reading and calculating from f2

    f2.open("f2.txt", ios_base::in);
    string s2;
    getline(f2, s2);
    int suma = 0, srednia, w=0;
    cout << "Liczby niepodzielne przez 3 to: ";
    while (!f2.eof()){
        int z;
        z = stoi(s2);   //saving string as int
        if (z%3!=0){
            w++;        //counting number of items that passed if
            suma += z;
            cout << z <<"; ";
        }
        else {}
        getline(f2, s2);
    }
    f2.close();
    cout <<"\nSuma liczb niepodzielnych przez 3: " << suma <<endl;
    srednia = (suma/w);
    cout <<"Srednia liczb niepodielnych przez 3 wynosi: "<<srednia<<endl;
    return 0;
}

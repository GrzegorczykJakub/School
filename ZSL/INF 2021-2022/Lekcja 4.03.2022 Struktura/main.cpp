#include <iostream>
#include <cstdlib>
//zoo mieso i roslinozerne zwierzeta
//karmione za pomoca kolejek i stosow
 
using namespace std;
 
struct Uczen {
private:
    int numer;
    double srednia;
    bool zdal;
    int oceny_koncowe[6];
 
public:
    Uczen() {
        numer = rand() % 1000 + 1000;
        srednia = rand() % 6 + 1;
        oceny();
        ob_sr();
        czy_zdal();
    }
 
    void wyswietl_informacje() {
        cout << numer << " " << srednia << endl;
    }
 
    void zmien_srednia(double z) {
        srednia = z;
    }
 
    Uczen(int a, double b) {
        numer = a;
        srednia = b;
    }
 
 
    void zmien_numer(Uczen& u, int nr) {
        u.numer = nr;
    }
 
    void wyswietl_tab(Uczen tab[], int r) {
        for (int i = 0; i < r; i++) {
            tab[i].wyswietl_informacje();
        }
    }
 
    void najlepsza(Uczen tab[], int r) {
        Uczen naj = tab[0];
        for (int i = 0; i < r; i++) {
            if (naj.srednia < tab[i].srednia) {
                naj = tab[i];
            }
        }cout << "Najlepszy uczen to: "; naj.wyswietl_informacje();
    }
    void oceny() {
        for (int i = 0; i < 6; i++) {
            oceny_koncowe[i] = rand() % 6 + 1;
        }
    }
    void ob_sr() {
        double sr = 0;
        for (int i = 0; i < 6; i++) {
            sr += oceny_koncowe[i];
        }
        srednia = sr / 6;
    }
    void czy_zdal() {
        if (srednia > 1.5)
        {
            zdal = true;
        }
        else zdal = false;
    }
    void wyswietl_koncowe() {
        cout << "Oceny skladowe : ";
        for (int i = 0; i < 6; i++) {
            cout << oceny_koncowe[i] << " ";
        };
        cout <<", srednia: " << srednia << endl;
    }
    double r_sr() {
        return srednia;
    }
        
};
 
struct Klasa {
    Uczen uczniowie[20];
    double srednia_klasy;
    int nr_klasy;
 
    Klasa() {
        nr_klasy = rand() % 10 + 1;
        for (int i = 0; i < 20; i++) {
            uczniowie[i] = Uczen();
        }
        ob_sr_k();
    }
 
    void ob_sr_k() {
        double sr = 0;
        for (int i = 0; i < 20; i++) {
            sr += uczniowie[i].r_sr();
        }
        srednia_klasy = sr / 20;
    }
 
    void wyswietl() {
        cout << "Klasa numer: " << nr_klasy << endl;
        cout << "Uzyskala srednia: " << srednia_klasy<<endl;
        cout << "Oceny uczniow: " << endl;
        for (int i = 0; i < 20; i++) {
            uczniowie[i].wyswietl_informacje();
        }
    }
};
 
void ktora_lepsza(Klasa& a, Klasa& b) {
    if (a.srednia_klasy > b.srednia_klasy) {
        cout << "Klasa numer " << a.nr_klasy << " jest lepsza" << endl;
    }
    else cout << "Klasa numer " << b.nr_klasy << " jest lepsza" << endl;
}
 
 
int main() {
    // Uczen u1;
    // u1.wyswietl_informacje();
    // u1.zmien_srednia(3);
    // u1.wyswietl_informacje();
    // zmien_numer(u1, 1000);
    // u1.wyswietl_informacje();
    Uczen uczniowie[10];
    int r = sizeof(uczniowie) / sizeof(uczniowie[0]);
    uczniowie[7].wyswietl_koncowe();
    Klasa a, b;
    a.wyswietl();
    b.wyswietl();
    ktora_lepsza(a, b);
}

//2 7 3 5 - 2 6 * + * 6 * + =
//17 24 9 * + 2 6 4 1 - 7 + * + - 12 - =
#include<iostream>
#include<string>
#include<stack>
using namespace std;

int dzialanie(int a, int b, char oper)
{
    switch(oper)
    {
        case '+':
            return a + b;
        case '-':
            return a - b;
        case '*':
            return a * b;
        case '/':
            return a / b;//dzielenie całkowite
    }
    cout<<"Podano nieprawidłowy operator";
    return 0;
}
//sprawdzam, czy podany znak jest cyfrą
bool czy_cyfra(char znak)
{
    return znak >= '0' && znak <= '9';
}
//sprawdzam, czy dany znak jest jednym z czterech operatorów
bool czy_oper(char znak)
{
    return znak == '+' || znak == '-' || znak == '*' || znak == '/';
}

//zamiana podłańcucha na liczbę
int str_to_int(string a, int &poz)
{
    int liczba = 0;
    while(poz < a.size() && czy_cyfra(a[poz]))
    {
        //schemat Hornera
        liczba = liczba * 10 + a[poz] - '0';
        ++poz;
    }
    --poz;
    return liczba;
}

int main()
{
    string ONP;
    cout<<"Wprowadź wyrażenie zapisane w ONP: ";
    getline(cin, ONP);
    stack<int> stos;
    int a, b;

    //analizujemy wszystkie znaki, aby wyłuskać liczby i operatory
    for(int i = 0;i < ONP.size(); i++)
    {
        if(czy_cyfra(ONP[i])) //jeśli wykryjesz cyfrę,
            stos.push((str_to_int(ONP, i))); //to zamień ją oraz kolejne na liczbę i wrzuć na stos
        else
        if(czy_oper(ONP[i])) //jeśli wykryjesz operator, to wykonaj odpowiednie działanie
        {
            if(stos.size() < 2) //gdy jest za mało liczb na stosie
            {
                cout<<"Niepoprawne wyrażenie ONP";
                return 0;
            }
            a = stos.top();	//pobierz pierwszą liczbę ze stosu
            stos.pop();	//usuń tę liczbę ze stosu
            b = stos.top();	//pobierz drugą liczbę ze stosu
            stos.pop();	//usuń tę liczbę ze stosu
            stos.push(dzialanie(b, a, ONP[i])); //wrzuć na stos wynik działania liczba b operator liczba a
        }
    }
    //jeśli ostatecznie na stosie będzie mniej lub więcej niż jeden element
    if(stos.size() != 1)
    {
        cout<<"Niepoprawne wyrażenie ONP";
        return 0;
    }
    cout<<"Wynik działania "<<ONP<<" : "<<stos.top();
    return 0;
}

#include <iostream>
#include <fstream>

/*int main() {
    std::fstream f1;    //ogolny
    std::ofstream f2;   //do zapisu
    std::ifstream f3;   //do odczytu
    f1.open("f1.txt", std::ios_base::out | std::ios_base::app);    //do zapisu na koncu
    //ios_base::in - do odczytu, ios_base::binary - tryb binarny
    f1 << "Hello world!" <<std::endl;
    f1.close();
    f3.open("f1.txt");
    std::string s1;
    getline(f3, s1);
    while (!f3.eof()) {
        std::cout << s1 << std::endl;
        getline(f3, s1);
    }
    f3.close();
    return 0;
}
 */
int main(){
    std::string imie;
    std::cin >> imie;
    std::fstream f1;
    std::ofstream f2;
    std::ifstream f3;
    f3.open("f1.txt");
    std::string s1;
    getline(f3, s1);
    while (!f3.eof()) {
        std::cout << s1 << std::endl;
        getline(f3, s1);
    }
    f3.close();
    f1.open("f1.txt", std::ios_base::out | std::ios_base::app);
    f1 << imie <<std::endl;
    f1.close();
    return 0;
}


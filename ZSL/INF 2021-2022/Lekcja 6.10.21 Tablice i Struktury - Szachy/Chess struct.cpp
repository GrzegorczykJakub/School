#include <iostream>

enum figure{pion, kon, goniec, wieza, hetman, krol};
struct figure {
    enum name{
            pion,
            kon,
            goniec,
            wieza,
            hetman,
            krol
            };
    enum color{bialy,czerwony};
    int value;
};
figure f1;
f1.name = king;
figure * f2 = new figure;
(*f2).color = white;
f2->value =0;
std::ostream& operator<<(std::ostream& os, figure f1){
    os << colorToString(f1.color) <<" "<<nameToString(f1.name) << "\nworth: "<<f1.value<<std::endl;
    return os;
}
int main() {
    struct chess {
        std::string name;
        std::string color;
        int value{};
        bool state{};
        char place[2]{};
    }pion, kon, goniec, wieza, hetman, krol;
    std::cout << f1;
    return 0;
}
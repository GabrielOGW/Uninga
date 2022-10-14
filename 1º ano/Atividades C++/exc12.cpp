#include <stdio.h>
using namespace std;

main(){
    float p, m, g, total;
    printf("\npasse a quantidade de camisas P: ");
    scanf("%f",&p);
    printf("\npasse a quantidade de camisas M: ");
    scanf("%f",&m);
    printf("\npasse a quantidade de camisas G: ");
    scanf("%f",&g);

    total = (p * 10) + (g * 12) + (g * 15);

    printf("\nO valor total arrecadado foi: %.1f\n", total);
}
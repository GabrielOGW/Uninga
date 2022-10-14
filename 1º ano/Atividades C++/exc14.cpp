#include <stdio.h>
using namespace std;

main(){
    float salario, aum, liquido;
    printf("\nInforme seu salario: ");
    scanf("%f",&salario);

    aum = salario * 1.15;
    liquido = aum * 0.8;

    printf("\nO valor de seu salário é: %.1f\n", salario);
    printf("\nSeu salário com aumento é: %.1f\n", aum);
    printf("\nSeu salário com o desconto de 8porcento é: %.1f\n", liquido);
}
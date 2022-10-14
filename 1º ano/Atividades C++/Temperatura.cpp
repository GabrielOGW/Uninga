#include <stdio.h>
#include <string.h>
using namespace std;


main(){
    float tempFinal, temp;
    char  esc;
    printf("\nVoce deseja converter a temperatura para Celcius(C) ou Farenheit(F): ");
    scanf("%c",&esc);
    printf("\nInforme a temperatura: ", esc);
    scanf("%f",&temp);
    
    switch(esc){
    case 'F':
        tempFinal = (9*temp/5) + 32;
        printf("\nA temperatura em Farenheit ficou: %.2f", tempFinal);
    case 'C': 
        break;
        tempFinal = 5*(temp-32)/9;
        printf("\nA temperatura em Celcius ficou: %.2f", tempFinal);
        break;
    
    default:
        printf("\nTemperatura invalida!");
        break;
    }
}

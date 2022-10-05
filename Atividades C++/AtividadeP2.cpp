#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
#include <locale.h>
#include <iostream>
#include <string.h>
using namespace std;

main(){
    struct data{
        int dia, ano;
        char cidade[25], mes[25];
    };
data informe;
    printf("\nInforme o dia de hoje: ");
    scanf("%d",&informe.dia);
    printf("\nInforme o mes atual: ");
    scanf("%s",&informe.mes);
    printf("\nInforme ano atual: ");
    scanf("%d",&informe.ano);
    printf("\nInforme cidade voce mora: ");
    scanf("%s",&informe.cidade);

    printf("\n\n%s, %d de %s de %d",informe.cidade, informe.dia, informe.mes, informe.ano);
}
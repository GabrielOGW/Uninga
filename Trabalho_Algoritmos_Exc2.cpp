#include <stdio.h>

/*  Tem-se um conjunto de dados contendo a altura e o sexo (M ou F) de 15 pessoas.
Faça um programa em C que calcule e mostre: 
A maior e a menor altura do grupo;
A média de altura das mulheres;
O número de homens;
O sexo da pessoa mais alta.  */

main(){
    //Define as variaveis
    float altura, mediaAltura, maiorAltura = 0, menorAltura = 3, somaAltura, somaM;
    char sexo;
    int cont, quantidadeM, quantidadeF;
    cont = 1;
    quantidadeM = 0;
    //Ciclo de repetição
    while(cont <= 15){
        printf("Informe a altura da pessoa: ");
        scanf("%f",&altura);
        printf("Informe o sexo da pessoa(m ou f): ");
        scanf("%s",&sexo);
        if(sexo = "m" || "M"){
            quantidadeM = quantidadeM + 1;
        } else {
            (somaM = somaM + altura);
        }
        if(altura > maiorAltura){
            maiorAltura = altura;
        } else if(altura < menorAltura){
            menorAltura = altura;
        }
        //ainda está inacabado.
    }
}

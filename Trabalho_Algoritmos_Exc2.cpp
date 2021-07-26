#include <stdio.h>

/*  Tem-se um conjunto de dados contendo a altura e o sexo (M ou F) de 15 pessoas.
Faça um programa em C que calcule e mostre: 
A maior e a menor altura do grupo;
A média de altura das mulheres;
O número de homens;
O sexo da pessoa mais alta.  */

main(){
    //Define as variaveis
    float altura, somaAltura, mediaAltura, maiorAltura = 0, menorAltura = 3;
    int contM = 0, contF = 0, pessoa = 1;
    char sexo, sexoMaior;
    //inicio da repetição e coleta de informações
    do{
        printf("Qual sexo da pessoa da %dª pessoa do grupo(M ou F): ", pessoa);
        scanf("%s",&sexo);
        
        printf("A altura desta pessoa: ");
        scanf("%f",&altura);
        if(sexo == 'M'){
            contM++;
        } else if(sexo == 'F'){
            contF++;
            somaAltura = somaAltura + altura;
        }
        
        if(altura > maiorAltura){
            maiorAltura = altura;
        }
        if(altura < menorAltura){
            menorAltura = altura;
        }

        if(sexo == 'M' && maiorAltura == altura){
            sexoMaior = 'M';
        }else if(sexo == 'F' && maiorAltura == altura){
            sexoMaior = 'F';
        }
        pessoa++;
    }while(pessoa <= 5);
    //calcula media da altura
    mediaAltura = somaAltura / contF;

//Mostra os resultados solicitados
    printf("\nA menor altura do grupo: %.2f\nA maior altura do grupo: %.2f", menorAltura, maiorAltura);
    printf("\nA media da altura das mulheres é: %.2f", mediaAltura);
    printf("\nO número de homens no grupo: %d", contM);
    if(sexoMaior == 'F'){
        printf("\nA maior pessoa do grupo é do sexo Feminino\n");
    } else {
        printf("\nA maior pessoa do grupo é do sexo Masculino\n");
    }
    
}

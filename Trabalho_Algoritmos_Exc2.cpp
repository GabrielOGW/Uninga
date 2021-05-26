#include <stdio.h>

main(){
    float altura, mediaAltura, maiorAltura = 0, menorAltura = 3, somaAltura, somaM;
    char sexo;
    int cont, quantidadeM, quantidadeF;
    cont = 1;
    quantidadeM = 0;
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
        
    }
}
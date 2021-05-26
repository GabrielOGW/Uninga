#include <stdio.h>

/*  Faça um programa em C para mostrar todos os números pares entre o número 1 e um número
digitado pelo usuário. */

main(){
    //Define variaveis que serão usadas
    int contador, valordesejado;
    //Imprime e pergunta ao usuário do desejado pelo enunciado
    printf("Ate que valor voce deseja ver os numeros pares: ");
    scanf("%d",&valordesejado);
    //ciclo de repetição utilizando o for para imprimir até o valor desejado
    for(contador = 0; contador < valordesejado; contador += 2){
        printf("%d\n",contador);
    }
    //Informa o usuário que o programa acabou
    printf("\nFim!\n");
}

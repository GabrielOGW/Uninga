#include <stdio.h>

/*  Faça um programa em C para mostrar todos os números pares entre o número 1 e um número
digitado pelo usuário. */

main(){
    int contador, valordesejado;
    printf("Ate que valor voce deseja ver os numeros pares: ");
    scanf("%d",&valordesejado);
    for(contador = 0; contador < valordesejado; contador += 2){
        printf("%d\n",contador);
    }
    printf("\nFim!\n");
}

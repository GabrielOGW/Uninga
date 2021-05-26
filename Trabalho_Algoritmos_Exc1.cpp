#include <stdio.h>

main(){
    int contador, valordesejado;
    printf("Ate que valor voce deseja ver os numeros pares: ");
    scanf("%d",&valordesejado);
    for(contador = 0; contador < valordesejado; contador += 2){
        printf("%d\n",contador);
    }
    printf("\nFim!\n");
}
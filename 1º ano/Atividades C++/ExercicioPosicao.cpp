#include <stdio.h>

main(){
    int i, v[10], maior, endereco;
    for(i = 0;i < 10;i++){
        printf("\nInforme um numero: ");
        scanf("%d",&v[i], maior);
    }
    for(i = 0;i < 10;i++){
        printf("\nVetor: %d", v[i]);
        if(v[i] > maior){
            maior = v[i];
            endereco = i;
        }     
    }
    printf("\nO maior numero do vetor eh esse: %d\ne esta neste endereco do vetor: %d\n\n", maior, endereco);
}
#include <stdio.h>
using namespace std;

float calcMedia(float a, float b);

main(){
    int qtd = 5;
    float produtos[12], somaProduto, media, caro = 0;
    for (int i = 0; i < qtd; i++) {
        printf("\nInforme o valor do produto %i: ", i+1);
        scanf("%f",&produtos[i]);
        somaProduto = somaProduto + produtos[i];
        if(caro < produtos[i]){
            caro = produtos[i];
        }
    }
    media = calcMedia(somaProduto, qtd);
    printf("\nO valor do produto mais caro e: %.2f", caro);
    printf("\nA media de valores e: %.2f", media);
}

float calcMedia(float a, float b){
    return a / b;
}
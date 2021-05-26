#include <stdio.h>

main(){
    int idade, quantEspec = 0, contM = 0, contF = 0, gostou = 0, naoGostou = 0;
    char sexo, opniao;
    
    do{
        printf("Qual a idade de espectador: ");
        scanf("%d",&idade);
        quantEspec++;
        printf("o sexo do espectador(M ou F): ");
        scanf("%c",&sexo);
        if(sexo = "M"){
            contM++;
        } else if(sexo = "F"){
            contF++;
        } else {
            printf("\nInserir um sexo valido\n");
        }
        printf("Você gostou ou não gostou do teatro\n(S para gostou ou N para não gostou)\n  ");
        scanf("%c",opniao);
        if(opniao = "S"){
            gostou++;
        } else if("N"){
            naoGostou++;
        } 
        printf("informe a idade de proximo espectador, ou 0 para encerrar a pesquisa: ");
        scanf("%d",idade);
    } while(idade != 0);
    printf("Mulheres: %d\n homens: %d\n gostou %d\n nao gostou %d\n ", contF, contM, gostou, naoGostou);
}
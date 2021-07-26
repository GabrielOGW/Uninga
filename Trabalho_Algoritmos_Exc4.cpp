#include <stdio.h>

/*
Uma pessoa quer fazer uma pesquisa de opinião sobre uma peça de teatro.
Desenvolva um programa em C para anotar a idade, o sexo (M ou F) e a opinião dos espectadores (S-gostou da peça ou N-não gostou).
Quando não houver mais pessoas a serem entrevistadas,
o usuário deverá digitar zero para a idade e o programa deverá mostrar:
Quantas pessoas foram entrevistadas;
O percentual de pessoas que gostaram da peça;
Quantos homens e quantas mulheres participaram da pesquisa;
E a média de idade dos espectadores.
*/

main(){
    //Define as variaveis:
    int idade, quantEspec = 0, contM = 0, contF = 0, mediaIdade, somaIdade;
    char sexo, opniao;
    float porcentagemOpniao, gostou = 0, naoGostou = 0;
    
    printf("Qual a idade de espectador: ");
    scanf("%d",&idade);
        quantEspec++;
    while(idade != 0){
        /*irá ler a idade colocada fora do while, e também lerá as proxima colocadas no final(exceto 0);
        feito assim pois se fosse no final do escopo, não leria a primeira idade fora do while*/
        somaIdade = somaIdade + idade;
        printf("\nO sexo do espectador(M ou F): ");
        scanf("%s",&sexo);
        if(sexo == 'M'){
            contM++;
        } else if(sexo == 'F'){
            contF++;
        }

       printf("\nVocê gostou ou não gostou do teatro\nS para gostou ou N para não gostou\n");
        scanf("%s",&opniao);
        if(opniao == 'S'){
            gostou++;
        } else if(opniao == 'N'){
            naoGostou++;
        }

        printf("\nInforme a idade de outro espectador\nOu digite 0 para acabar a pesquisa.\n");
        scanf("%d",&idade);
        if(idade != 0){
            quantEspec++;
        }  
    }
    //faz os calculos que foram juntados com as informações dentro do while
    porcentagemOpniao = gostou * 100/ quantEspec;
    mediaIdade = somaIdade / quantEspec;
    //imprime as informações desejadas no enunciado
    printf("Quantidade de espectadores entrevistados: %d\n",quantEspec);
    printf("Porcentagem de pessoas entrevistadas que gostaram da peça: %.2f%%\n",porcentagemOpniao);
    printf("Quantidade de Mulheres entrevistadas: %d\nQuantidade de Homens entrevistados: %d\n", contF, contM);
    printf("A media de idade dos espectadores entrevistados: %d anos\n",mediaIdade);
}

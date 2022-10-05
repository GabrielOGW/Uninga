#include <stdio.h>
#include <string.h>
using namespace std;

extern const int funcionarios = 2;

typedef struct cadastro{
        int banco, numero, tipo;
        char nome[30];
        float saldo;    
}Cadastro;

float calcMedia(cadastro cont[funcionarios]);
float buscaSaldo(cadastro cont[funcionarios]);
int procBanco(cadastro cont[funcionarios]);
int somaCorrente(cadastro cont[funcionarios]);

main() {
    int i = 0, cod;
    Cadastro conta[funcionarios];
    for (i = 0; i < funcionarios; i++){
        printf("\n\n===== Funcionario  %d =====", i+1);
        printf("\nInforme o numero do seu banco: ");
        scanf("%d",&conta[i].banco);
        printf("\nInforme o numero da sua conta: ");
        scanf("%d",&conta[i].numero);
        printf("\nInforme o tipo da sua conta:\n1-conta corrente\n2-poupanca\n3-conta salario\n");
        scanf("%d",&conta[i].tipo);
        printf("\nInforme seu saldo: ");
        scanf("%f",&conta[i].saldo);
        printf("\nInforme seu Nome: ");
        scanf("%s",&conta[i].nome);        
    }
    
    printf("\nSelecione a operacao que voce deseja\n1 - Calcula media de saldo das contas\n2 - Somar a quantidade de contas corrente\n3 - Busca Saldo\n4 - procurar contas\n");
    scanf("%d",&cod);

    switch(cod) {
    case 1:
        calcMedia(conta);
        break;
    case 2:
        somaCorrente(conta);
        break;
    case 3:
        buscaSaldo(conta);
        break;
    case 4:
        procBanco(conta);
        break;
    default:
    printf("\nOperação invalida!");
        break;
    }
}
float calcMedia(cadastro cont[funcionarios]) {
    int i = 0, soma = 0;
    float media;
    for(i; i < funcionarios; i++){
        soma = soma + cont[i].saldo;
    }
    media = soma/funcionarios;
    printf("\nA media de saldo dos funcionarios e: %.2f", media);
    return 0;
}
int somaCorrente(cadastro cont[funcionarios]) {
    int i = 0;
    int somaCorrente = 0;
    for(i = 0; i < funcionarios; i++) {
        if(cont[i].tipo == 1) {
            somaCorrente++;
        }
    }
    printf("\nA quantidade de conta correntes e: %d", somaCorrente);
    return 0;
}
float buscaSaldo(cadastro cont[funcionarios]) {
    char buscaFunc[30];
    int i = 0;
    float saldoFunc = 0;
    printf("\n\ninforme o nome do funcionario que voce deseja ver o saldo: ");
    scanf("%s",&buscaFunc);
    for (i = 0; i < funcionarios; i++){
        if(strcmp(buscaFunc, cont[i].nome)==0){
            saldoFunc = saldoFunc + cont[i].saldo;
        }
    }
    printf("\nO saldo de suas contas somadas e: %.2f", saldoFunc);
    return 0;
}
int procBanco(cadastro cont[funcionarios]) {
    int buscaBanco;
    int i = 0;
    int somaBanco = 0;
    printf("\n\ninforme o numero do banco que voce deseja procurar: ");
    scanf("%d",&buscaBanco);
    for (i = 0; i < funcionarios; i++){
        if(buscaBanco == cont[i].banco){
            somaBanco++;       
        }
    }
    printf("\nA quantidade de contas que pertencem ao banco desejado e: %d", somaBanco);
    return 0;
}
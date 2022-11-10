

public class Calculadora {
    private double num1, num2;

    public double getNum1() {
        return num1;
    }
    public void setNum1(double num1) {
        this.num1 = num1;
    }
    public double getNum2() {
        return num2;
    }
    public void setNum2(double num2) {
        this.num2 = num2;
    }

    double soma(double num1, double num2){
        double soma = num1 + num2;
        return soma;
    }
    double subtracao(double num1, double num2){
        double subtracao = num1 - num2;
        return subtracao;
    }
    double multiplicacao(double num1, double num2){
        double multiplicacao = num1 * num2;
        return multiplicacao;
    }
    double divisao(double num1, double num2){
        double divisao = num1 / num2;
        return divisao;
    }
}
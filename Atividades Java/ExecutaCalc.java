

import javax.swing.JOptionPane;

public class ExecutaCalc {
    public static void main(String[] args) {
    // Criação da calculadora.
    Calculadora calculadora = new Calculadora();
    // Coleta de informações: valores e operação desejada.
    calculadora.setNum1(Double.parseDouble(JOptionPane.showInputDialog("Informe o primeiro valor: ")));
    String op = JOptionPane.showInputDialog("Qual operacao você deseja fazer:\n+ - soma\n- - subtração\n* - multiplicação\n/ - divisão\n");
    calculadora.setNum2(Double.parseDouble(JOptionPane.showInputDialog("Informe o segundo valor: ")));
    // Switch para escolha desejada, chamar a função e realizar o calculo.
    switch (op) {    
        case "+":
            JOptionPane.showMessageDialog(null, "Resultado: " + calculadora.soma(calculadora.getNum1(), calculadora.getNum2()));
            break;
            case "-":
            JOptionPane.showMessageDialog(null, "Resultado: " + calculadora.subtracao(calculadora.getNum1(), calculadora.getNum2()));
            break;

            case "*":
            JOptionPane.showMessageDialog(null, "Resultado: " + calculadora.multiplicacao(calculadora.getNum1(), calculadora.getNum2()));
            break;

            case "/":
            JOptionPane.showMessageDialog(null, "Resultado: " + calculadora.divisao(calculadora.getNum1(), calculadora.getNum2()));
            break;
    
        default:
            JOptionPane.showMessageDialog(null, "Operação invalida!");
            break;
    }
    
    }
}
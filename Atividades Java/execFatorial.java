import javax.swing.JOptionPane;

public class execFatorial {
    public static void main(String[] args) {
        fatorial fatorial = new fatorial();


        fatorial.setNum1((long)Double.parseDouble(JOptionPane.showInputDialog(null, "informe o valor a ser fatorado: ")));

        fatorial.getFatoracao(fatorial.getNum1());
    }
}
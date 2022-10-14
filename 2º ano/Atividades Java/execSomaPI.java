import javax.swing.JOptionPane;

public class execSomaPI {
    public static void main(String[] args) {
        somaPI PI = new somaPI();

        PI.setNum((int)Double.parseDouble(JOptionPane.showInputDialog(null, "Informe o valor desejado:")));

        PI.getSoma(PI.getNum());
    }
}

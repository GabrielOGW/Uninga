import javax.swing.JOptionPane;

public class loja {
    private double valorMensal;
    private int cod;

    public int getCod() {
        return cod;
    }
    public void setCod(int cod) {
        this.cod = cod;
    }
    public double getValorMensal() {
        return valorMensal;
    }
    public void setValorMensal(double valorMensal) {
        this.valorMensal = valorMensal;
    }

    public double getLucro(int cod, double valorMensal){
        double lucro;
        switch (cod) {
            case 1:
                lucro = valorMensal * 0.07;
                JOptionPane.showMessageDialog(null, "Lucro da Região Sul: " + lucro);
            break;

            case 2:
                lucro = valorMensal * 0.10;
                JOptionPane.showMessageDialog(null, "Lucro da Região Centro-Oeste: " + lucro);
            break;

            case 3:
                lucro = valorMensal * 0.08;
                JOptionPane.showMessageDialog(null, "Lucro da Região Sudeste: " + lucro);
             break;
        
            default:
                JOptionPane.showMessageDialog(null, "Opção invalida");
            break;
        }
        return 0;
    }
}

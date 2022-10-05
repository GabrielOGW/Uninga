import javax.swing.JOptionPane;

public class ExecPaciente {
    public static void main(String[] args) {
        paciente paciente = new paciente();

        paciente.setAltura(Double.parseDouble(JOptionPane.showInputDialog("Qual a alturado paciente?")));
        paciente.setPeso(Double.parseDouble(JOptionPane.showInputDialog("Qual o peso do paciente?")));

        JOptionPane.showMessageDialog(null, "O paciente se encaixa no conceito: " + paciente.getConceito(paciente.getAltura(), paciente.getPeso()));

    }
}

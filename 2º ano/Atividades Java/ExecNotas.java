import javax.swing.JOptionPane;

public class ExecNotas {
    public static void main(String[] args) {
        notas notas = new notas();
        
        notas.setNota1(Double.parseDouble(JOptionPane.showInputDialog("Qual a nota da primeira prova?")));
        notas.setNota2(Double.parseDouble(JOptionPane.showInputDialog("Qual a nota da segunda prova?")));
        notas.setNota3(Double.parseDouble(JOptionPane.showInputDialog("Qual a nota da terceira prova?")));

        JOptionPane.showMessageDialog(null,"Media de nota das três provas: " + notas.getMedia(notas.getNota1(), notas.getNota2(), notas.getNota3()));
        JOptionPane.showMessageDialog(null,"Maior nota entre as três provas: " + notas.getMaior(notas.getNota1(), notas.getNota2(), notas.getNota3()));
        JOptionPane.showMessageDialog(null,"Menor nota entre as três provas: " + notas.getMenor(notas.getNota1(), notas.getNota2(), notas.getNota3()));
        JOptionPane.showMessageDialog(null,"Media de nota entre as duas melhores provas: " + notas.getDuasMaiores(notas.getNota1(), notas.getNota2(), notas.getNota3()));
    }
}
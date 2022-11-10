import javax.swing.JOptionPane;

public class exec {
  public static void main(String[] args) {
    int quantidadeEleitores = 10;
    int qtdVotos = 0;
    int votoBranco = 0;
    int votoNulo = 0;
    for (int i = 0; i < quantidadeEleitores; i++) {
      int voto = Integer.parseInt(JOptionPane.showInputDialog(null,
          "Informe seu voto:\n1 - candidato X\n2 - candidato Y\n3 - candidato Z\n4 - candidato W\n5 - Branco\n6 - Nulo",
          "Urna Eletronica - Votação",
          JOptionPane.QUESTION_MESSAGE));

      switch (voto) {
        case 1:
          candidatoX CandX = new candidatoX();
          CandX.votoX++;
          System.out.println(CandX.votoX);
          break;
        case 2:
          candidatoY CandY = new candidatoY();
          CandY.votoY++;
          System.out.println(CandY.votoY);
          break;
        case 3:
          candidatoZ CandZ = new candidatoZ();
          CandZ.votoZ++;
          System.out.println(CandZ.votoZ);
          break;
        case 4:
          candidatoW CandW = new candidatoW();
          CandW.votoW++;
          System.out.println(CandW.votoW);
          break;
        case 5:
          votoBranco++;
          System.out.println(votoBranco);
          break;
        case 6:
          votoNulo++;
          System.out.println(votoNulo);
          break;
        default:
          break;
      }
      qtdVotos++;
      System.out.println(qtdVotos);
    }
  }
}

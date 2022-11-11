public class candidato {


  double calcPorcentagem(int votoC, int qtdVotos) {
    double porcentagem;
    porcentagem = (double) ((votoC * 100) / qtdVotos);
    System.out.println("Candidato X: " + porcentagem); 
    return porcentagem;
  }

  String verificaVencedor(int notaX, int notaY, int notaZ, int notaW) {
    if (notaX > notaY && notaX > notaZ && notaX > notaW) {
      return "candidato X venceu!";
    } else if (notaY > notaX && notaY > notaZ && notaY > notaW) {
      return "candidato Y venceu!";
    } else if (notaZ > notaX && notaZ > notaY && notaZ > notaW) {
      return "candidato Z venceu!";
    } else if (notaW > notaX && notaW > notaZ && notaW > notaZ) {
      return "candidato Z venceu!";
    }
    return "";
  }
}
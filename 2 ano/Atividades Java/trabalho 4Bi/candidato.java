public class candidato {


  double calcPorcentagem(int votoC, int qtdVotos) {
    double porcentagem;
    porcentagem = (double) ((votoC * 100) / qtdVotos);
    System.out.println("Candidato X: " + porcentagem); 
    return porcentagem;
  }

  String verificaVencedor(int VotoX, int VotoY, int VotoZ, int VotoW) {
    if (VotoX > VotoY && VotoX > VotoZ && VotoX > VotoW) {
      return "candidato X venceu!";
    } else if (VotoY > VotoX && VotoY > VotoZ && VotoY > VotoW) {
      return "candidato Y venceu!";
    } else if (VotoZ > VotoX && VotoZ > VotoY && VotoZ > VotoW) {
      return "candidato Z venceu!";
    } else if (VotoW > VotoX && VotoW > VotoZ && VotoW > VotoZ) {
      return "candidato Z venceu!";
    }
    return "";
  }
}
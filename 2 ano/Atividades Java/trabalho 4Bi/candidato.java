public class candidato {


  double calcPorcentagem(int votoC, int qtdVotos) {
    double porcentagem;
    porcentagem = (double) ((votoC * 100) / qtdVotos);
    System.out.println("Candidato X: " + porcentagem); 
    return porcentagem;
  }
}
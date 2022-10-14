import java.util.Scanner;

public class infAlunos {

    public static void main(String[] args) {
        Aluno aluno;
        aluno = new Aluno();
        try (Scanner ler = new Scanner(System.in)) {
            System.out.println("Qual seu nome: ");  
            aluno.nome = ler.nextLine();
            System.out.println("Qual a disciplina? ");
            aluno.disciplina = ler.nextLine();
            System.out.println("Qual carga horaria da disciplina? ");
            aluno.cargaHoraria = ler.nextDouble();
            System.out.println("Qual quantidade de faltas? ");
            aluno.faltas = ler.nextDouble();
            System.out.println("Qual valor da primeira nota? ");
            aluno.nota1 = ler.nextDouble();
            System.out.println("Qual valor da segunda nota? ");
            aluno.nota2 = ler.nextDouble();
            System.out.println("Qual valor da terceira nota? ");
            aluno.nota3 = ler.nextDouble();
            System.out.println("Qual valor da quarta nota? ");
            aluno.nota4 = ler.nextDouble();
            double media = Aluno.calculaMedia(aluno.nota1, aluno.nota2,aluno.nota3, aluno.nota4);
            System.out.println("Media das notas: " + media);
            
            String aprovado = Aluno.verificaAprovacao(aluno.faltas, aluno.cargaHoraria, media);
            System.out.println(aprovado);
        }
    }

}

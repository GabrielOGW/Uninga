
public class Aluno {
    String nome, disciplina;
    Double nota1, nota2, nota3, nota4;
    Double cargaHoraria, faltas;
    


    public static double calculaMedia(double nota1, double nota2,double nota3, double nota4) {
        double media;
        int qtdBimestre = 4;
        media = (nota1 + nota2 + nota3 + nota4) / qtdBimestre;
        return media;
    }

    public static String verificaAprovacao(double faltas, double cargaHoraria, double media) {  
        Double frequencia = (double) 0;
        frequencia = frequencia * cargaHoraria; 
        frequencia = ((cargaHoraria - faltas) * 100)/ cargaHoraria;
        if(media >= 6 && frequencia >= 75) {
           return "Aprovado"; 
        } else {
            return "Reprovado";
        }
    }


}
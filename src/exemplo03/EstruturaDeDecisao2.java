package exemplo03;

public class EstruturaDeDecisao2 {
	public static void main(String[] args) {
		/**
		 * Exemplo de estrutura de decisão encadeada
		 **/
		
		String materia = "Português";
		
		if(materia == "PHP") {
			System.out.println("Disciplina do 4º Módulo");
		} else if(materia == "Banco de dados"){
			System.out.println("Disciplina do 3º Módulo");
		} else if(materia == "Java"){
			System.out.println("Disciplina do 5º Módulo");
		} else {
			System.out.println("Disciplina não é dos módulos de programação");
		}
	}
}

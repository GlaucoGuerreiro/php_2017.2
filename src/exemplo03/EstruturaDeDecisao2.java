package exemplo03;

public class EstruturaDeDecisao2 {
	public static void main(String[] args) {
		/**
		 * Exemplo de estrutura de decis�o encadeada
		 **/
		
		String materia = "Portugu�s";
		
		if(materia == "PHP") {
			System.out.println("Disciplina do 4� M�dulo");
		} else if(materia == "Banco de dados"){
			System.out.println("Disciplina do 3� M�dulo");
		} else if(materia == "Java"){
			System.out.println("Disciplina do 5� M�dulo");
		} else {
			System.out.println("Disciplina n�o � dos m�dulos de programa��o");
		}
	}
}

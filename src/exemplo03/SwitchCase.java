package exemplo03;

public class SwitchCase {
	public static void main(String[] args) {
		String opcao;
		
		opcao = "web02";
		
		switch(opcao) {
		case "Web2":
		case "web2":
		case "Web02":
		case "web02":
			System.out.println("Desenvolvimento de sites responsivos, templates e jQuery, ajax");
			break;
		case "PHP":
		case "Php":
		case "php":
			System.out.println("Criação de sites informativos, sistemas interligados a um SGBD");
			break;
		case "JAVA":
		case "Java":
		case "java":
			System.out.println("Criação de sistemas robustos, muito utilizado por bancos");
			break;
		default:
			System.out.println("Nenhuma das opções acima..");
			break;
		}
	}
}

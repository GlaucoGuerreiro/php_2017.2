package exemplo03;

public class MetodoEqualsIgnoreCase {
	public static void main(String[] args) {
		String texto = "java";
		
		// equals é equivalente aos "=="
		
		if(texto.equals("Java")) {
			System.out.println("É igual");
		} else {
			System.out.println("Não é igual");
		}
	
	
	System.out.println("\n----------------------\n");
	
	// ignorando o caso
	if(texto.equalsIgnoreCase("JAVA")) {
		System.out.println("É igual");
	}else {
		System.out.println("Não é igual");
		}
	}
}

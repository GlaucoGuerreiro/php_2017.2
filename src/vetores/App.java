package vetores;

public class App {

	public static void main(String[] args) {
		Aritmetica aritmetica = new Aritmetica();
		
		System.out.printf("O resultado da soma �: %.2f",aritmetica.somar(1.2, 5.7, 9.0, 2.5, 9.8, 7.3, 8.4, 7.0));
		
		System.out.printf("\nO resultado da multiplica��o �: %.2f",aritmetica.multiplicar(1.2, 5.7, 9.0, 2.5, 9.8, 7.3, 8.4, 7.0));
		
		System.out.printf("\nO resultado da subtra��o �: %.2f",aritmetica.subtrair(1.2, 5.7, 9.0, 2.5, 9.8, 7.3, 8.4, 7.0));
		
		System.out.printf("\nO resultado da divis�o �: %.2f",aritmetica.dividir(10.0, 5.0));
	}

}

package vetores;

public class App {

	public static void main(String[] args) {
		Aritmetica aritmetica = new Aritmetica();
		
		System.out.printf("O resultado da soma é: %.2f",aritmetica.somar(1.2, 5.7, 9.0, 2.5, 9.8, 7.3, 8.4, 7.0));
		
		System.out.printf("\nO resultado da multiplicação é: %.2f",aritmetica.multiplicar(1.2, 5.7, 9.0, 2.5, 9.8, 7.3, 8.4, 7.0));
		
		System.out.printf("\nO resultado da subtração é: %.2f",aritmetica.subtrair(1.2, 5.7, 9.0, 2.5, 9.8, 7.3, 8.4, 7.0));
		
		System.out.printf("\nO resultado da divisão é: %.2f",aritmetica.dividir(10.0, 5.0));
	}

}

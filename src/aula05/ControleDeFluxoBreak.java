package aula05;

import java.util.Scanner;

public class ControleDeFluxoBreak {
	public static void main(String[] args) {
		
		int x;
		int y;
				
		Scanner teclado = new Scanner(System.in);
		
		System.out.println("Programa para dados dos n�meros de entrada, ir� percorrer essa faixa verificando\n"
				+ "faixa verificando se existe algum n�mero divis�vel por 19\n");
		
		System.out.print("Digite o n�mero inicial: ");
		x = teclado.nextInt();
		
		System.out.print("Digite o n�mero final: ");
		y = teclado.nextInt();
		
		for(int i = x; i < y; i++) {
			if(i % 19 == 0) {
				System.out.println("Achei um n�mero divis�vel por 19 entre x e y");
				break;
			}
		}
		teclado.close();
	}
}

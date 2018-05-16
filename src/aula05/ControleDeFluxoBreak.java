package aula05;

import java.util.Scanner;

public class ControleDeFluxoBreak {
	public static void main(String[] args) {
		
		int x;
		int y;
				
		Scanner teclado = new Scanner(System.in);
		
		System.out.println("Programa para dados dos números de entrada, irá percorrer essa faixa verificando\n"
				+ "faixa verificando se existe algum número divisível por 19\n");
		
		System.out.print("Digite o número inicial: ");
		x = teclado.nextInt();
		
		System.out.print("Digite o número final: ");
		y = teclado.nextInt();
		
		for(int i = x; i < y; i++) {
			if(i % 19 == 0) {
				System.out.println("Achei um número divisível por 19 entre x e y");
				break;
			}
		}
		teclado.close();
	}
}

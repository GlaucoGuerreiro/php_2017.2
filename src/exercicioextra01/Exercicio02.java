package exercicioextra01;

public class Exercicio02 {
	public static void main(String[] args) {
		double altP = 1.50;
		double altM = 1.10;
		int anos = 0;
		
		while(altM < altP) {
			altM += 0.3;
			altP += 0.2;
			anos += 1;
						
		}
		
		System.out.println("Serão necessários "+ anos +" anos para que Mauro seja maior que Pedro.");
	}
}

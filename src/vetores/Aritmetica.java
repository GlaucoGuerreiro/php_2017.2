package vetores;

public class Aritmetica {
	
	/**
	 * 
	 * @param ...valores - � uma defini��o de vetor como par�metro
	 */
	
	public double somar(double ...valores) {
		
		double resultado = 0;
		
		for (double v : valores) {
			resultado += v;
			
		}
		
		return resultado;
		//System.out.printf("O total �: %.2f", resultado);
		
	}
	
	public double multiplicar(double ...valores) {
		
		double resultado2 = 1;
		
		for(double m : valores) {
			resultado2 *= m;
		}
		return resultado2;
		//System.out.printf("\nO resultado da multiplica��o �: %.2f", resultado2);
	}
	
	public double subtrair(double ...valores) {
		
		double resultado3 = valores[0];
		
		for (int i=0; i<valores.length; i++) {
			resultado3 -= valores[i];
		}
		return resultado3;
		//System.out.printf(\nO resultado da subtra��o �: %.2f, resultado3);
	}
	
	public double dividir(double ...valores) {
		
		double resultado4 = valores[0];
			
		for (int i=1; i<valores.length; i++) {
			resultado4 /= valores[i];
		}
		return resultado4;
		//System.out.printf(\nO resultado da divis�o �: %.2f, resultado4);
	}
}

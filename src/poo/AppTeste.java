package poo;

public class AppTeste {
	public static void main(String[] args) {
		/*
		 * Pessoa p - cria��o da referencia da Pessoa, aonde o 'p' � essa referencia.
		 * 
		 * new Pessoa() - cria��o da instancia(Objeto), aonde utilizamos a palavra new
		 * para criar.
		 */

		/**
		 * Coment�rio documental
		 * 
		 * @author Luis Paulo Jr.
		 * @since 2018-05-29
		 */

		/**
		 * @var p - Da acesso aos recursos da classe Pessoa
		 */

		Pessoa p = new Pessoa();

		p.nome = "Claudemir";
		p.sexo = "Masculino";
		p.corDaPele = "Negro";
		p.titulo = "Batman";
	}
}

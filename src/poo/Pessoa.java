package poo;

// caracteristicas
// a��es
public class Pessoa {

	/*
	 * Os atributos definem as caracteriscas de 
	 * uma pessoa
	 */
	private String nome;
	private String corDaPele;
	private Double altura;
	private Double peso;
	private Integer idade;
	private String sexo;
	private String titulo;

	/* Os m�todos definem as a��es de uma pessoa */
	void andar() {}
	void correr() {}
	void comer() {}
	String falar() { return ""; }
	// void verificarLogin() {} -- n�o faz sentido
	
	// m�todos gets - servem para resgatar a valor do atributo
	public String getNome() {
		return nome;
	}
	
	// m�todos sets - servem para atribuir(inserir) o valor do atributo
	public void setNome(String nome) {
		this.nome = nome;
	}
}

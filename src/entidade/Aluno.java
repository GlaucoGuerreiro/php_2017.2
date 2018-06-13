package entidade;
import java.io.Serializable;

public class Aluno implements Serializable{
	private static final long serialVersionUID = 1L;
	
	private int codigo;
	private String nome;
	private String endereco;
	private String telefone;
	
	public Aluno(int codigo, String nome, String endereco, String telefone) {
		this.codigo = codigo;
		this.nome = nome;
		this.endereco = endereco;
		this.telefone = telefone;
		
	}
	
	public void setCodigo(int codigo) {
		this.codigo = codigo;
	}
	public int getCodigo(int codigo) {
		return codigo;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public String getNome(String nome) {
		return nome;
	}
	public void setEndereco(String endereco) {
		this.endereco = endereco;
	}
	public String getEndereco(String endereco) {
		return endereco;
	}
	public void setTelefone(String telefone) {
		this.telefone = telefone;
	}
	public String getTelefone(String telefone) {
		return telefone;
	}
	
	@Override
	public String toString() {
		return codigo +", "+nome+", "+endereco+", "+telefone;
	}
	
	public static void main(String[] args) {
		Aluno dados = new Aluno(1, "Glauco R. Guerreiro", "Rua Curitiba", "3119-7930");
		System.out.println(dados);
	}
}


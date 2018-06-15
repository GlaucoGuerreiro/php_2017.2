package entidade;
	import java.io.Serializable;
	

public class Alunos_back implements Serializable {
	private static final long serialVersionUID = 1L;
	
	private long matricula;
	private String nome;
	private String rg;
	private String telefone;
	
	public Alunos_back(long matricula, String nome, String rg, String telefone) {
		this.matricula = matricula;
		this.nome = nome;
		this.rg = rg;
		this.telefone = telefone;
		
	}
	
	public void setMatricula(long matricula) {
		this.matricula = matricula;
	}
	public long getMatricula() {
		return matricula;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	public String getNome() {
		return nome;
	}
	
	public void setRg(String rg) {
		this.rg = rg;
	}
	public String getRg() {
		return rg;
	}
	
	public void setTelefone(String telefone) {
		this.telefone = telefone;
	}
	public String getTelefone() {
		return telefone;
	}
	
	@Override
	public String toString() {
		return matricula+", "+nome+", "+rg+", "+telefone;
	}
	
	public static void main(String[] args) {
		Alunos_back aluno = new Alunos_back(1001, "Glauco Guerreiro", "12269325-2", "3119-7930");
		
		System.out.print(aluno);
	}
	
}

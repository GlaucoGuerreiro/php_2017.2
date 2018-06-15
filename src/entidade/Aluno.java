package entidade;
	import java.io.Serializable;
	

public class Aluno implements Serializable {
	private static final long serialVersionUID = 1L;
	
	private long matricula;
	private String nome;
	private String rg;
	private String telefone;
	
	public Aluno() {
				
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
		Aluno aluno = new Aluno();
		
		aluno.setMatricula(1000);
		aluno.setNome("Glauco Guerreiro");
		aluno.setRg("12345345-2");
		aluno.setTelefone("3119-7845");
		
		System.out.print(aluno);
	}
	
}

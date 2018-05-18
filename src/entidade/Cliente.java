package entidade;

public class Cliente {
	
	private int id;
	private String nome;
	private String email;
	
	// gets e sets
	public void setId(int id) {
		this.id = id;
	}
	
	public int getId() {
		return id;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	public String getNome() {
		return nome;
	}
	
	public void setEmail(String email) {
		this.email = email;		
	}
	
	public String getEmail() {
		return email;
	}
}

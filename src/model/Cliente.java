package model;

public class Cliente {
	private int idCliente;
	private String nome;
	
	private Contato contato;
	private Endereco endereco;
	
	public Cliente() {
		
	}

	public Cliente(int idCliente, String nome, Contato contato, Endereco endereco) {
		super();
		this.idCliente = idCliente;
		this.nome = nome;
		this.contato = contato;
		this.endereco = endereco;
	}

	public int getIdCliente() {
		return idCliente;
	}

	public void setIdCliente(int idCliente) {
		this.idCliente = idCliente;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public Contato getContato() {
		return contato;
	}

	public void setContato(Contato contato) {
		this.contato = contato;
	}

	public Endereco getEndereco() {
		return endereco;
	}

	public void setEndereco(Endereco endereco) {
		this.endereco = endereco;
	}
}
	
package model;

public class Contato {
	private int idContato;
	private String telefone;
		
	private Cliente cliente;
	
	public Contato() {
		
	}

	public Contato(int idContato, String telefone, Cliente cliente) {
		super();
		this.idContato = idContato;
		this.telefone = telefone;
		this.cliente = cliente;
	}

	public int getIdContato() {
		return idContato;
	}

	public void setIdContato(int idContato) {
		this.idContato = idContato;
	}

	public String getTelefone() {
		return telefone;
	}

	public void setTelefone(String telefone) {
		this.telefone = telefone;
	}

	public Cliente getCliente() {
		return cliente;
	}

	public void setCliente(Cliente cliente) {
		this.cliente = cliente;
	}

}
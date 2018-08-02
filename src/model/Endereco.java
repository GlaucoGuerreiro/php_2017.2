package model;

public class Endereco {
	private int idendereco;
	private String logradouro;
	
	private Cliente cliente;
	
	public Endereco() {
	
	}

	public Endereco(int idendereco, String logradouro, Cliente cliente) {
		super();
		this.idendereco = idendereco;
		this.logradouro = logradouro;
		this.cliente = cliente;
	}

	public int getIdendereco() {
		return idendereco;
	}

	public void setIdendereco(int idendereco) {
		this.idendereco = idendereco;
	}

	public String getLogradouro() {
		return logradouro;
	}

	public void setLogradouro(String logradouro) {
		this.logradouro = logradouro;
	}

	public Cliente getCliente() {
		return cliente;
	}

	public void setCliente(Cliente cliente) {
		this.cliente = cliente;
	}

}
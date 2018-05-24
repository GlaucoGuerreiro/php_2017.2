package model;

public class Vendedor {

	public static class VendedorData {
		private String nomeVendedor;
		private String emailVendedor;
		private String telefone;
		private String categoria;

		public VendedorData() {
		}

		public String getNomeVendedor() {
			return nomeVendedor;
		}

		public void setNomeVendedor(String nomeVendedor) {
			this.nomeVendedor = nomeVendedor;
		}

		public String getEmailVendedor() {
			return emailVendedor;
		}

		public void setEmailVendedor(String emailVendedor) {
			this.emailVendedor = emailVendedor;
		}

		public String getTelefone() {
			return telefone;
		}

		public void setTelefone(String telefone) {
			this.telefone = telefone;
		}

		public String getCategoria() {
			return categoria;
		}

		public void setCategoria(String categoria) {
			this.categoria = categoria;
		}
	}
	private VendedorData data = new VendedorData();
	
	
	
	
}


	

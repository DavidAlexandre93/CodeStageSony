<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cadastra_empresa extends CI_Model {
	public function cad_empresa($emp, $email, $cnpj, $expe, $end, $est ,$senha){

		$sql = $this->db->query("INSERT INTO agencias (empresa, cpnj, email, anos_mercado, endereco, estado, senha) VALUES ('$emp', '$cnpj', '$email', $expe, '$end', '$est', '$senha')");

		if($sql->affected_rows() > 0){
			return 1;
		}else{
			return 0;
		}
	}
}
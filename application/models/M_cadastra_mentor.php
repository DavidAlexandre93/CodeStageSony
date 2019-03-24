<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cadastra_mentor extends CI_Model {
	public function cad_mentor($senha, $nome, $email, $nasc, $expe, $natural, $end, $est, $prof, $nome,$nasc, $expe, $natural, $end, $est, $prof){

		$sql = $this->db->query("INSERT INTO mentores (nome,email,senha,data_nascimento,anos_experiencia,naturalidade,endereco,estado,profissao) VALUES ('$nome', '$email', '$senha', '$nasc', '$expe', '$natural', '$end', '$est', '$prof')");

		if($sql->affected_rows() > 0){
			return 1;
		}else{
			return 0;
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function loga($senha, $usuario){
		$retorno = $this->db->query("SELECT * FROM usuarios
										 WHERE usuario = '$usuario'
										 AND senha = '$senha'");
			if($retorno->num_rows() > 0){
				return 1;
			}else{
				return 0;
			}
				
	}

}
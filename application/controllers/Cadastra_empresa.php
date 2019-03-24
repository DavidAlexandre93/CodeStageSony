<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastra_empresa extends CI_Controller {

	public function index(){
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('v_cad_empresa');
		$this->load->view('includes/footer');
	}

	public function cad_empresa(){
		$emp = $this->input->post('emp');
		$email = $this->input->post('email');
		$cnpj = $this->input->post('cnpj');
		$expe = $this->input->post('expe');
		$end = $this->input->post('end');
		$est = $this->input->post('est');
		$senha = $this->input->post('senha');
		$this->load->model('M_cadastra_empresa');
        $retorno = $this->M_cadastra_empresa->cad_empresa($emp, $email, $cnpj, $expe, $end, $est ,$senha);
        echo json_encode($retorno);
	}
}
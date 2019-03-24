<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastra_mentor extends CI_Controller {

	public function index(){
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('v_cad_mentor');
		$this->load->view('includes/footer');
	}

	public function cad_mentor(){
		$senha = $this->input->post('senha');
		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$nasc = $this->input->post('nasc');
		$expe = $this->input->post('expe');
		$natural = $this->input->post('natural');
		$end = $this->input->post('end');
		$est = $this->input->post('est');
		$prof = $this->input->post('prof');
		$email = $this->input->post('email');
		$retorno = "teste";
		$this->load->model('M_cadastra_mentor');
        $retorno = $this->M_cadastra_mentor->cad_mentor($senha, $nome, $email, $nasc, $expe, $natural, $end, $est, $prof, $nome,$nasc, $expe, $natural, $end, $est, $prof);
        echo json_encode($retorno);
	}
}
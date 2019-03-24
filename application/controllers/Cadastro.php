<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index(){
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('v_cad_artista');
		$this->load->view('includes/footer');
	}

	public function show_cadart(){
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('v_cad_artista');
		$this->load->view('includes/footer');
	}

	public function cadart(){
		$senha = $this->input->post('senha');
		$usuario = $this->input->post('usuario');
		$this->load->model('M_login');
        $retorno = $this->M_login->loga($senha, $usuario);
        echo json_encode($retorno);
	}

	public function show_cadamen(){
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('v_cad_mentor');
		$this->load->view('includes/footer');
	}

	public function show_cadaemp(){
		$this->load->view('includes/header');
		$this->load->view('includes/menu');
		$this->load->view('v_cad_empresa');
		$this->load->view('includes/footer');
	}

	public function cad_artista(){
		// $senha = $this->input->post(md5('senha'));
		// $nome = $this->input->post('nome');
		// $email = $this->input->post('email');
		// $nasc = $this->input->post('nasc');
		// $expe = $this->input->post('expe');
		// $natural = $this->input->post('natural');
		// $end = $this->input->post('end');
		// $est = $this->input->post('est');
		// $prof = $this->input->post('prof');
		// $email = $this->input->post('email');
		$this->load->model('M_cadastra');
        $retorno = $this->M_cadastra->cad_artista($senha, $nome, $email, $nasc, $expe, $natural, $end, $est, $prof,$senha, $nome,$nasc, $expe, $natural, $end, $est, $prof);
        echo json_encode($retorno);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
		{
			$this->load->view('templates/header');
			$this->load->view('profil');
			$this->load->view('layanan');
			$this->load->view('portofolio');
			$this->load->view('download');
			$this->load->view('kontak');
			$this->load->view('templates/footer');
		}


	public function profil()
		{
			$this->load->view('templates/header');
			$this->load->view('profil');
			$this->load->view('templates/footer');
		}

	public function portofolio()
		{
			$this->load->view('templates/header');
			$this->load->view('portofolio');
			$this->load->view('templates/footer');
		}

	public function layanan()
		{
			$this->load->view('templates/header');
			$this->load->view('layanan');
			$this->load->view('templates/footer');
			
		}

	public function download()
		{
			$this->load->view('templates/header');
			$this->load->view('download');
			$this->load->view('templates/footer');
			
		}

	public function kontak()
		{
			$this->load->view('templates/header');
			$this->load->view('kontak');
			$this->load->view('templates/footer');
		}


}

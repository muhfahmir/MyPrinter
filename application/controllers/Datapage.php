<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Gejala_model",'m_gejala');
		$this->load->model("Pengetahuan_model",'m_pengetahuan');
		$this->load->model("Penyakit_model",'m_penyakit');
	}

	public function index()
	{
		$data['title']= "Data Pakar";
		$data['gejalas']= $this->m_gejala->getAllGejala();
		$data['penyakits']= $this->m_penyakit->getAllPenyakit();
		$data['pengetahuans']= $this->m_pengetahuan->getAllPengetahuan();
		$data['pengetahuans2'] = $this->m_pengetahuan->getPengetahuanPenyakit();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('datapage');
		$this->load->view('templates/footer');
	}
}
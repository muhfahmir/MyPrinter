<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gejala_model','m_gejala');
		$this->load->model('Penyakit_model','m_penyakit');
		$this->load->model('User_model','m_user');
	}
	
	public function index()
	{
		$data['title'] = "Dashboard";
		$data['contentTitle'] = "Dashboard";
		$data['gejala']= $this->m_gejala->countGejala();
		$data['penyakit']= $this->m_penyakit->countPenyakit();
		$data['users'] = $this->m_user->getAllUser();
		$this->load->view('admin/dashboard/index',$data);
	}

	public function create(){

	}

	public function store($request){

	}

	public function show($id){

	}

	public function edit($id){

	}

	public function update($id,$request){

	}

	public function destory($id){
		
	}
}
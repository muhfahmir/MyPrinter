<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gejala_model','m_gejala');
		$this->load->model('Penyakit_model','m_penyakit');
	}
	
	public function index()
	{
		$data['title'] = "Dashboard";
		$data['contentTitle'] = "Dashboard";
		$data['gejala']= $this->m_gejala->countGejala();
		$data['penyakit']= $this->m_penyakit->countPenyakit();
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
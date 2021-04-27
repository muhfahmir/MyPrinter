<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengetahuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Gejala_model',"m_gejala");
        $this->load->model('Penyakit_model',"m_penyakit");
        $this->load->model('Pengetahuan_model',"m_pengetahuan");
	}
	
	

	public function index()
	{
		$data['title'] = "Basis Pengetahuan";
		$data['contentTitle'] = "Basis Pengetahuan";
        $penyakits = $this->m_penyakit->getAllPenyakit();
        $gejalas = $this->m_gejala->getAllGejala();
        $pengetahuan2=

        // $pengetahuans = $this->m_pengetahuan->getAllPengetahuan();
        $pengetahuans = $this->m_pengetahuan->getPengetahuanPenyakit();
        // var_dump();
        // die;
        $dataPengetahuan =[];
       
        // for($j=0; $j<count($penyakits);$j++){
        //     // echo $j."<br/>";
        //     for ($i=0; $i<count($gejalas);$i++) {
        //         // echo $i."<br/>";
        //         for($k=0;$k<count($pengetahuans);$k++){
        //             // echo $k."<br/>";
        //             if($penyakits[$j]['id'] == $pengetahuans[$j]['penyakit']){
        //                 // echo "true"."<br/>";
        //                 if($gejalas[$i]['id'] == $pengetahuans[$j]['gejala']){
        //                     $dataPengetahuan[$j][]=1;
        //                 }else{
        //                     $dataPengetahuan[$j][]=0;
        //                 }
        //             }else{
        //                 // if(isset($dataPengetahuan[$j][$i])){
        //                     $dataPengetahuan[$j][]=0;
        //                 // }
        //             }
        //         }
        //     }
        // }
        // var_dump($dataPengetahuan);
        // die;
        $data['pengetahuans'] = $pengetahuans;
        $data['gejalas'] = $gejalas;
        $data['penyakits'] = $penyakits;
		$this->load->view('admin/pengetahuan/index',$data);
	}

	public function create(){

	}

	public function store($request){

	}

	public function show($id){

	}

	public function edit($id){
        $data['title'] = "Edit Basis Pengetahuan";
		$data['contentTitle'] = "Data Pengetahuan / Rule";
		$data['pengetahuan'] = $this->m_pengetahuan->getPengetahuanPenyakitId($id);
        $data['gejalas'] = $this->m_gejala->getAllGejala();
		$this->load->view('admin/pengetahuan/edit',$data);

	}

	public function update($id){
        $gejalas = $this->m_gejala->getAllGejala();
        $gejala = [];
        for($i = 0 ; $i<count($gejalas);$i++) {
            $gejala[$gejalas[$i]['id']]=$this->input->post($gejalas[$i]['id']);
        }
        $this->m_pengetahuan->updatePengetahuan($id,$gejala);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Rule berhasil di update!</div>');
        redirect('admin/pengetahuan');
	}

	public function destory($id){
		
	}
}
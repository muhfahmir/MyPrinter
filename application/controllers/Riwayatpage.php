<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RiwayatPage extends CI_Controller {

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
		$this->load->model('User_model','m_user');
		$this->load->model('Gejala_model',"m_gejala");
        $this->load->model('Penyakit_model',"m_penyakit");
        $this->load->model('Pengetahuan_model',"m_pengetahuan");
	 }

	public function index()
	{
		$data['title']= "Riwayat Page";
		$data['users'] = $this->m_user->getUserPenyakit();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('riwayatpage');
		$this->load->view('templates/footer');
	}

	public function detailPage($id){
		$user = $this->m_user->getUserById($id);
		$data['nama'] = $user['nama'];
		$data['no_telp'] = $user['no_telp'];

		$gejala = $this->db->get_where('gejala_user',['id_user' => $id])->result_array();
		foreach($gejala as $i =>$g){
			$gejala[$i] = $this->m_gejala->getGejalaById($g['gejala']);
		}
		$data['gejala'] = $gejala;
		$data['penyakit'] = $this->m_penyakit->getPenyakitById($user['analisa']);
		$data['title']= "Diagnosa Page";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar');
		$this->load->view('hasilpage');
		$this->load->view('templates/footer');
	}
}
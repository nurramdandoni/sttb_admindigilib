<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	// Controller Untuk LOGIN dan REGISTRASI USERS

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model(array('Model_Auth','Akun_Admin'));
		$this->load->library(array('email','encrypt'));
		
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function ProsesLogin()
	{
		$email 	  		= $this->input->post('email');
		$key = 'digilib@sttbandung.ac.id';
		$passwordNoEncript = $this->input->post('password');
		$password 		= $this->encrypt->encode($passwordNoEncript,$key);
		$dataUserLogin 	= $this->Model_Auth->m_GetUserEmailAndPassword($email,$password);
		$cek['$dataUserLogin']=$this->session->userdata('$dataUserLogin');
		if ($dataUserLogin->num_rows()>0) {
			$dataUser = $dataUserLogin->row_array();

			$dataSession = array('id_user' 	=>$dataUser['id_user'],
				'nama_user'=>$dataUser['nama_user'],
				'email'	=>$dataUser['email'],
				'islogin'	=>"true");
			$this->session->set_userdata($dataSession);	
			// redirect('C_admin');
			?>
			<script type="text/javascript">alert($cek)</script>
			<?php

		}else{
			?>
			<script type="text/javascript">alert("Maaf Password Atau Email Tidak Ada Disistem !")</script>
			<?php
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."Auth'> ";
		}

	}
	public function ProsesRegister()
	{

		$nama_user 	=$this->input->post('nama_user');
		$email     	=$this->input->post('email');
		$passwordNoEncript = $this->input->post('password');
		$re_passwordNoEncript = $this->input->post('re_password');
		$key = 'digilib@sttbandung.ac.id';
		$e_password  	=$this->encrypt->encode($passwordNoEncript,$key);
		$e_re_password=$this->encrypt->encode($re_passwordNoEncript,$key);
		// descript
		$password  	=$this->encrypt->decode($e_password,$key);
		$re_password=$this->encrypt->decode($e_re_password,$key);
		$status    	='0';

		$dataEmailUser=$this->Model_Auth->m_GetUserEmail($email); 
		if ($password !=$re_password) {
			?>
			<script type="text/javascript">alert("Maaf Password Anda Tidak Sama !")</script>
			<?php
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."Auth'> ";

		}elseif ($dataEmailUser->num_rows()>0) {

			?>
			<script type="text/javascript">alert("Maaf Email Sudah Terdaftar !")</script>
			<?php

			echo "<meta http-equiv='refresh' content='0; url=".base_url()."Auth'> ";

		}else{

			$data = array('nama_user' =>$nama_user,
				'email' 	  =>$email,
				'password'  =>$e_password,
				'status'    =>$status );

			$id_newinsert=$this->Model_Auth->m_RegisterInsert($data);
			

			$ci = get_instance();
			$ci->load->library('email');
		        $config['protocol'] = "smtp";
		        $config['smtp_host'] = "ssl://mail.sttbandung.ac.id";
		        $config['smtp_port'] = "465";
		        $config['smtp_user'] = "digilib@sttbandung.ac.id";
		        $config['smtp_pass'] = "Scr34m0nk!Y";
		        $config['charset'] = "utf-8";
		        $config['mailtype'] = "html";
		        $config['newline'] = "\r\n";
		        
		        
		        $ci->email->initialize($config);
		 
		        $ci->email->from('digilib@sttbandung.ac.id', 'Admin Digilib STT Bandung');
		        $list = array($email);
		        $ci->email->to($list);
		        $ci->email->subject('Registrasi Digilib');
		        $ci->email->message('Selamat, berikut adalah resume pendaftaran anda :<br>
							        Nama User     : '.$nama_user.'<br>
							        Email (Login) : '.$email.'<br>
							        password      : '.$passwordNoEncript.'<br> klik dibawah ini untuk verifikasi email anda : <a href='.base_url().'Auth/verifikasi/'.$id_newinsert.'>Klik Disini</a>');
		        $this->email->send();
			?>
			<script type="text/javascript">alert("Registrasi Berhasil , Silahkan Cek Email")</script>
			<?php
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."Auth'> ";

		}

		

		


	}

	public function verifikasi(){
		$id= $this->uri->segment(3);
		$data=array(
			'status' => '1'
		);
		$this->Akun_Admin->m_verifikasi_akun($id,$data);

	}


	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	//menampilkan halaman login
	public function index()
	{
		$this->load->view('v_welcome');
	}

	//validasi login
	function login_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$sebagai = $this->input->post('sebagai');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() !=false){
			$where = array(
				'username' => $username,
				'password' => ($password)
			);
			if($sebagai == "admin"){
				$cek = $this->M_data->cek_login('administrators',$where)->num_rows();
				$data = $this->M_data->cek_login('administrators',$where)->row();
				if($cek > 0){
				$data_session = array(
					'id' => $data->id,
					'username' => $data->username,
					'status' => 'admin_login'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url().'admin');
				}else{
					redirect(base_url().'login?alert=gagal');
				}
			}else if($sebagai == "member"){
				$cek = $this->M_data->cek_login('members',$where)->num_rows();
				$data = $this->M_data->cek_login('members',$where)->row();
				if($cek > 0){
					$data_session = array(
					'id' => $data->id,
					//'nama' => $data->name,
					'email' => $data->email,
					'password'	=> $data->password,
					'status' => 'member_login'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url().'member');
				}else{
					redirect(base_url().'login?alert=gagal');
				}
				}
			}else{
				$this->load->view('v_login');
			}
		}
	function login()
	{
		$this->load->view('v_login');
	}
	function registrasi()
	{
		$this->load->view('v_registrasi');
	}
	public function registrasi_aksi()
    {
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		$phone = $this->input->post('phone');
		$birthdate = $this->input->post('birthdate');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$id_card_no = $this->input->post('id_card_no');
		$photo_path = $this->input->post('photo_path');
		$data = array(
			'name' => $name,
			'password' => $password,
			'phone' => $phone,
			'birthdate' => $birthdate,
			'email' => $email,
			'gender' => $gender,
			'id_card_no' => $id_card_no,
			'photo_path' => $photo_path
		);
		$this->M_data->insert_data($data, 'members');
		redirect(base_url().'login/index');
	}
	function member_json(){
		$data['member'] = $this->M_data->get_data('members')->result();
		$this->load->view('json/v_header');
		$this->load->view('json/v_member_json', json_encode($data));
		$this->load->view('json/v_footer');
	}
}
?>
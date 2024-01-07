<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status')!="admin_login")
		{
			redirect(base_url().'login?alert=belum_login');
		}
	}
	function index(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_index');
		$this->load->view('admin/v_footer');
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login/?alert=logout');
	}

	function ganti_password(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_ganti_password');
		$this->load->view('admin/v_footer');
	}

	function ganti_password_aksi(){
		$baru = $this->input->post('password_baru');
		$ulang = $this->input->post('password_ulang');
		$this ->form_validation->set_rules('password_baru','Password Baru','required|matches[password_ulang]');
		$this ->form_validation->set_rules('password_ulang','Ulangi Password','required');
		if($this->form_validation->run()!=false)
		{
			$id = $this->session->userdata('id');
			$where = array('id' => $id);
			$data = array('password' => md5($baru));
			$this->M_data->update_data($where,$data,'admin');
			redirect(base_url().'admin/ganti_password/?alert=sukses');
		}else
		{
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_ganti_password');
			$this->load->view('admin/v_footer');
		}
	}

	function user(){
		$data['user'] = $this->M_data->get_data('administrators')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_user', $data);
		$this->load->view('admin/v_footer');
	}
	function user_tambah(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_user_tambah');
		$this->load->view('admin/v_footer');
	}
	function user_tambah_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'password' => $password
		);
		$this->M_data->insert_data($data, 'administrators');
		redirect(base_url().'admin/user');
	}
	function user_edit($id){
		$where = array('id' => $id);

		$data['user'] = $this->M_data->edit_data($where, 'administrators')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_user_edit', $data);
		$this->load->view('admin/v_footer');
	}
	function user_update(){
		$id = $this->input->post('id');		
		//$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('id' => $id);

		if($password=="")
		{
			$data = array('id' => $id, 'administrators' => $username,'username' => $username);
			$this->M_data->update_data($where,$data, 'administrators');
		}		
		redirect(base_url().'admin/user');
	}
	function user_hapus($id){
		$where = array('id' => $id);

		$this->M_data->delete_data($where, 'administrators');

		redirect(base_url().'admin/user');
	}

	function member(){
		$data['member'] = $this->M_data->get_data('members')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_member', $data);
		$this->load->view('admin/v_footer');
	}

	function member_edit($id){
		$where = array('id' => $id);

		$data['member'] = $this->M_data->edit_data($where, 'members')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_member_edit', $data);
		$this->load->view('admin/v_footer');
	}

	function member_update(){
		$id = $this->input->post('id');		
		$nama = $this->input->post('nama');
		//$username = $this->input->post('username');
		$password = $this->input->post('password');
		$phone = $this->input->post('phone');
		$birthdate = $this->input->post('birthdate');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$id_card_no = $this->input->post('id_card_no');
		$photo = $this->input->post('photo');
		$where = array('id' => $id);

		if($password=="")
		{
			$data = array('id_card_no' => $id_card_no, 'members' => $nama,'username' => $username);
			$this->M_data->update_data($where,$data, 'members');
		}		
		redirect(base_url().'admin/members');
	}

	function member_hapus($id){
		$where = array('id' => $id);

		$this->M_data->delete_data($where, 'members');

		redirect(base_url().'admin/member');
	}
}
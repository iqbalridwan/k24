<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status')!="member_login")
		{
			redirect(base_url().'login?alert=belum_login');
		}
	}
	function index(){
		$this->load->view('member/v_header');
		$this->load->view('member/v_index');
		$this->load->view('member/v_footer');
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login/?alert=logout');
	}
	function ganti_password(){
		$this->load->view('member/v_header');
		$this->load->view('member/v_ganti_password');
		$this->load->view('member/v_footer');
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
			$this->M_data->update_data($where,$data,'members');
			redirect(base_url().'member/ganti_password/?alert=sukses');
		}else
		{
			$this->load->view('member/v_header');
			$this->load->view('member/v_ganti_password');
			$this->load->view('member/v_footer');
		}
	}
	function member(){
		$data['member'] = $this->M_data->get_data('members')->result();
		$this->load->view('member/v_header');
		$this->load->view('member/v_member', $data);
		$this->load->view('member/v_footer');
	}
}
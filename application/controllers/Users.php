<?php 
	class Users extends CI_Controller
	{
		
	
		public function register(){
			$data['title']="hey";
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('password2','Confirm_pass','matches[password]');

		if ($this->form_validation->run()=== FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/register',$data);
			$this->load->view('templates/footer');

		}else{
			$enc_password=md5($this->input->post('password'));
			$this->customer->register($enc_password);
			$this->session->set_flashdata('user_registered','You are now registered');
			redirect('home');

		}


		}

public function login(){
	$this->form_validation->set_rules('email','Email','required');
	$this->form_validation->set_rules('password','Password','required');
	if($this->form_validation->run()===FALSE){
		$this->load->view('templates/header');
		$this->load->view('users/login');
		$this->load->view('templates/footer');
	}
	else{
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		$user_id=$this->customer->login($email,$password);
		if($user_id){
			$user_data=array('user_id'=>$user_id,'email'=>$email,'logged_in'=>true);
			$this->session->set_userdata($user_data);
		redirect('users/admin');
	}
	else{
		redirect('users/login');
	}
	}
}

public function logout(){
	$this->session->unset_userdata('logged_in');
	$this->session->unset_userdata('email');
	$this->session->unset_userdata('user_id');
	redirect('users/login');
}


public function admin(){
	if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}
	$this->load->view('templates/header');
		$this->load->view('users/admin');
		$this->load->view('templates/footer');
}


public function request(){
	if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}
	$data['requests']=$this->customer->customer_data();
	$this->load->view('templates/header');
		$this->load->view('users/user_request',$data);
		$this->load->view('templates/footer');	
}

public function dth(){
	if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}
	$this->load->view('templates/header');
		$this->load->view('users/user_dth');
		$this->load->view('templates/footer');	
}


public function broadband(){
	if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}
	$this->load->view('templates/header');
		$this->load->view('users/user_broadband');
		$this->load->view('templates/footer');	
}

	}


 ?>
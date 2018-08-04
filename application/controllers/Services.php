<?php 	

class Services extends CI_Controller
{
	public function index(){

			$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('number','Number','required');
			$data['service']=$this->customer->get_data();
			if($this->form_validation->run()===FALSE){
				$this->load->view('templates/header.php');
				$this->load->view('services/index.php',$data);
				$this->load->view('templates/footer.php');
			}
			else{
				$this->customer->put_data();
				$name= $this->input->post('name');
				$number=$this->input->post('number');


				// *******************SMS************************

				$mobile="9381828207";
				$message="Name:".$name."Number:".$number;
				$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7338895164&Password=akshajith&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=ajitha0whSYUNMD1jGn8F"),true);
   $this->load->library('email');
  $this->email->from('ajithbmwkumar@gmail.com', 'Ajith');
  $this->email->to('majiatechs@gmail.com');
  $this->email->subject('This is my subject');
  $this->email->message('This is my message');
  $this->email->send();				

 
				// ********************************************
 						redirect('services');
				// $this->load->view('templates/header.php');
				// $this->load->view('home/'.$page,$data);
				// $this->load->view('templates/footer.php');
			}

	}

	public function view($page='airtel'){
		if(!file_exists(APPPATH.'views/services/'.$page.'.php')){
			show_404();
		}
		$data['info']=$this->customer->get_info($page);
		$this->load->view('templates/header.php');
		$this->load->view('services/'.$page,$data);
		$this->load->view('templates/footer.php');
	}
	

public function test($id=NULL){
	$data['details']=$this->customer->get_data($id);
	$data['service']=$this->customer->get_data();
	if(empty($data['details'])){
		show_404();
	}
		$this->load->view('templates/header.php');
		$this->load->view('services/details',$data);
		$this->load->view('templates/footer.php');
}


public function broadband($page='airtel-broadband'){
	if(!file_exists(APPPATH.'views/services/'.$page.'.php')){
		show_404();
	}
	$data['details']= $this->customer->broadband_info($page);
	$this->load->view('templates/header.php');
	$this->load->view('services/'.$page,$data);
	$this->load->view('templates/footer.php');
}

public function broadband_info($id=NULL){
	$data['details']=$this->customer->broadband($id);
	$data['service']=$this->customer->broadband();
	if(empty($data['details'])){
		show_404();
	}
	$this->load->view('templates/header.php');
	$this->load->view('services/broadband-details',$data);
	$this->load->view('templates/footer.php');
}



	public function new(){
	if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}

	$this->form_validation->set_rules('name','Name','required');
	$this->form_validation->set_rules('brand','brand','required');
	$this->form_validation->set_rules('type','Type','required');
	$this->form_validation->set_rules('subscription','Subscription','required');
	$this->form_validation->set_rules('period','Period','required');
	$this->form_validation->set_rules('mrp','MRP','required');
	$this->form_validation->set_rules('price','Price','required');
	$this->form_validation->set_rules('discount','Discont','required');
	$this->form_validation->set_rules('pic','Pic','required');

if($this->form_validation->run()===FALSE){
		$this->load->view('templates/header');
		$this->load->view('users/new');
		$this->load->view('templates/footer');
}
else{
	$this->customer->put_new();
	redirect('users/admin');
	}
	}


public function new_broadband(){
		if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}

	$this->form_validation->set_rules('name','Name','required');
	$this->form_validation->set_rules('brand','brand','required');
	$this->form_validation->set_rules('calls','Calls','required');
	$this->form_validation->set_rules('time','Time','required');
	$this->form_validation->set_rules('period','Period','required');
	$this->form_validation->set_rules('speed','Speed','required');
	$this->form_validation->set_rules('price','Price','required');
	$this->form_validation->set_rules('data','Data','required');
	$this->form_validation->set_rules('bonus','Bonus','required');
	$this->form_validation->set_rules('rollover','rollover','required');
if($this->form_validation->run()===FALSE){
		$this->load->view('templates/header');
		$this->load->view('users/new_broadband');
		$this->load->view('templates/footer');
}
else{
	$this->customer->put_new_broadband();
	redirect('users/admin');
	}


}


	public function edit($brand=NULL){
	if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}
	$data['items']=$this->customer->get_info($brand);
	 $this->load->view('templates/header');
	 	$this->load->view('users/edit',$data);
		 $this->load->view('templates/footer');
	}

	public function edit_broadband($brand=NULL){
	if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}
	$data['items']=$this->customer->broadband_info($brand);
	 $this->load->view('templates/header');
	 	$this->load->view('users/edit_broadband',$data);
		 $this->load->view('templates/footer');
	}



	public function edit_product($id=NULL){
	if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}

	$this->form_validation->set_rules('name','Name','required');
	$this->form_validation->set_rules('brand','brand','required');
	$this->form_validation->set_rules('type','Type','required');
	$this->form_validation->set_rules('subscription','Subscription','required');
	$this->form_validation->set_rules('period','Period','required');
	$this->form_validation->set_rules('mrp','MRP','required');
	$this->form_validation->set_rules('price','Price','required');
	$this->form_validation->set_rules('discount','Discont','required');
	$this->form_validation->set_rules('pic','Pic','required');


	$data['items']=$this->customer->get_data($id);
	if($this->form_validation->run()===FALSE){
	 $this->load->view('templates/header');
	 	$this->load->view('users/edit_product',$data);
		 $this->load->view('templates/footer');
	}
else{
		$this->customer->put_edit();
	redirect('users/admin');
}

	}


	public function edit_product_broadband($id=NULL){
	if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}

	$this->form_validation->set_rules('name','Name','required');
	$this->form_validation->set_rules('brand','brand','required');
	$this->form_validation->set_rules('calls','Calls','required');
	$this->form_validation->set_rules('time','Time','required');
	$this->form_validation->set_rules('period','Period','required');
	$this->form_validation->set_rules('speed','Speed','required');
	$this->form_validation->set_rules('price','Price','required');
	$this->form_validation->set_rules('data','Data','required');
	$this->form_validation->set_rules('bonus','Bonus','required');
	$this->form_validation->set_rules('rollover','rollover','required');


	$data['items']=$this->customer->broadband($id);
	if($this->form_validation->run()===FALSE){
	 $this->load->view('templates/header');
	 	$this->load->view('users/edit_product_broadband',$data);
		 $this->load->view('templates/footer');
	}
else{
		$this->customer->put_edit_broadband();
	redirect('users/admin');
}

	}


	public function delete_product(){
			if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}
		$this->customer->delete_data();
		redirect('users/admin');
	}

	public function delete_product_broadband(){
			if(!$this->session->userdata('logged_in')){
		redirect('users/login');
	}
		$this->customer->delete_data_broadband();
		redirect('users/admin');
	}







}

 ?>
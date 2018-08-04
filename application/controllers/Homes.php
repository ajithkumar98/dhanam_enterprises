<?php 


 class Homes extends CI_Controller
{
	public function view($page='home',$success='sucess'){
		if(!file_exists(APPPATH.'views/home/'.$page.'.php')){
			show_404();
		}
		$data['title']=$page;
		$data['service']=$this->customer->get_data();
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('number','Number','required');

			if($this->form_validation->run()===FALSE){
				$this->load->view('templates/header.php');
				$this->load->view('home/'.$page,$data);
				$this->load->view('templates/footer.php');
			}
			else{
				$this->customer->put_data();
				$name= $this->input->post('name');
				$number=$this->input->post('number');


				// *******************SMS************************

				$mobile="7338895164";
				$message="Name :".$name."  Number:".$number;
				$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7338895164&Password=akshajith&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=ajitha0whSYUNMD1jGn8F"),true);
 				 
				// ********************************************


				// ****************email*******************

  $this->load->library('email');
  $this->email->from('ajithbmwkumar@gmail.com', 'Ajith');
  $this->email->to('majiatechs@gmail.com');
  $this->email->subject('This is my subject');
  $this->email->message('Name '.$name.' Number '.$number);
  $this->email->send();


				//************************************
 
				$this->load->view('templates/header.php');
				$this->load->view('home/'.$success,$data);
				$this->load->view('templates/footer.php');
			}

	}
	
	}


 ?>
<?php 	

class Customer extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function put_new(){
		$data=array(
		'name'=> $this->input->post('name'),
		'brand'=> $this->input->post('brand'),
		'type'=> "dth",
		'type_of_connection'=> $this->input->post('type'),
		'subscription'=> $this->input->post('subscription'),
		'period'=> $this->input->post('period'),
		'mrp'=> $this->input->post('mrp'),
		'price'=> $this->input->post('price'),
		'discount'=> $this->input->post('discount'),
		'thumb'=> $this->input->post('pic'),
		);
		return $this->db->insert('services',$data);

	}

	public function put_new_broadband(){
		$data=array(
		'name'=> $this->input->post('name'),
		'brand'=> $this->input->post('brand'),
		'calls'=> $this->input->post('calls'),
		'time'=> $this->input->post('time'),
		'period'=> $this->input->post('period'),
		'speed'=> $this->input->post('speed'),
		'price'=> $this->input->post('price'),
		'data'=> $this->input->post('data'),
		'bonus'=> $this->input->post('bonus'),
		'carry-over'=> $this->input->post('rollover'),
		);
		return $this->db->insert('broadband',$data);

	}

	public function put_edit(){
		$data=array(
		'name'=> $this->input->post('name'),
		'brand'=> $this->input->post('brand'),
		'type'=> "dth",
		'type_of_connection'=> $this->input->post('type'),
		'subscription'=> $this->input->post('subscription'),
		'period'=> $this->input->post('period'),
		'mrp'=> $this->input->post('mrp'),
		'price'=> $this->input->post('price'),
		'discount'=> $this->input->post('discount'),
		'thumb'=> $this->input->post('pic'),
		);
		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('services',$data);

	}

		public function put_edit_broadband(){
		$data=array(
		'name'=> $this->input->post('name'),
		'brand'=> $this->input->post('brand'),
		'calls'=> $this->input->post('calls'),
		'time'=> $this->input->post('time'),
		'period'=> $this->input->post('period'),
		'speed'=> $this->input->post('speed'),
		'price'=> $this->input->post('price'),
		'data'=> $this->input->post('data'),
		'bonus'=> $this->input->post('bonus'),
		'carry-over'=> $this->input->post('rollover'),
		);
		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('broadband',$data);

	}


	public function put_data(){
		$name= $this->input->post('name');
		$number=$this->input->post('number');

		$data=array(
			'name'=>$name,
			'number'=>$number);
		return $this->db->insert('customers',$data);
	}


public function customer_data(){
	$this->db->order_by('created_on', 'DESC');
	$this->db->limit(100);
	$query=$this->db->get('customers');
	return $query->result_array();
}


	public function delete_data(){
			$this->db->where('id',$this->input->post('id'));
			return $this->db->delete('services');
	}

	public function delete_data_broadband(){
			$this->db->where('id',$this->input->post('id'));
			return $this->db->delete('broadband');
	}	

	public function get_data($id=FALSE){

	if($id===FALSE){
		$this->db->order_by('services','RANDOM');
		$this->db->limit(8);
		$query=$this->db->get('services');
		return $query->result_array();
	}		

	$query = $this->db->get_where('services',array('id'=>$id));
	return $query->row_array();


	}


	public function get_info($brand=FALSE){
		if($brand === FALSE){
			$query=$this->db->get('services');
			return $query->result_array();
		}

		$query=$this->db->get_where('services',array('brand'=>$brand));
		return $query->result_array();
	}

	public function broadband_info($brand=FALSE){
		if($brand===FALSE){
			$query=$this->db->get('broadband');
			return $query->result_array();
		}
		$query=$this->db->get_where('broadband',array('brand'=>$brand));
		return $query->result_array();
	}

	public function broadband($id=FALSE){
		if($id===FALSE){
			$query=$this->db->get('broadband');
			return $query->result_array();
		}
		$query=$this->db->get_where('broadband',array('id'=>$id));
		return $query->result_array();
	}

	public function register($enc_password){
		$data=array('name'=> $this->input->post('name'),
			'email'=> $this->input->post('email'),
			'password'=> $enc_password
			);
		return $this->db->insert('users',$data);
	}



public function login($email,$password){
	$this->db->where('email',$email);
	$this->db->where('password',$password);
	$result=$this->db->get('users');
	if($result->num_rows()==1){
		return $result->row(0)->id;
	}else{
		return false;
	}
}
}

 ?>
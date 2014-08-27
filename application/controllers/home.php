<?php
class home extends CI_Controller{

	public function index(){
		$this->load->view('first');
	}

	public function insert(){
		//$data['insert']=false;
		if($this->input->post('insert')){

			extract($_POST);
			$data=array('Name'=>$name,'email'=>$email,'status'=>$status);
			$this->load->model('dblib','lib');
			$result=$this->lib->insert($data);

			if($result){

				$msg['msg']="data insert successfully";
				$this->load->view('insert',$msg);
			}
			else{

				$msg['msg']='Somthing wrong try later';
				$this->load-view('insert',$msg);
			}
		}
		else{

			$this->load->view('insert');

		}
	}

	public function update(){

		if($this->input->post('update')){

			extract($_POST);
			$data=array('Name'=>$name,'email'=>$email,'status'=>$status);
			$this->load->model('dblib','lib');
			$result=$this->lib->update($data);

			if($result){

				$msg['msg']="data insert successfully";
				$this->load->view('update',$msg);
			}
			else{

				$msg['msg']='Somthing wrong try later';
				$this->load-view('update',$msg);
			}
		}
		else{

			$this->load->view('update');

		}
	}


} 

?>
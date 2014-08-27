<?php
class home extends CI_Controller{

	public function index(){
		$this->load->view('first');
	}

	public function insert(){
		
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
			$result=$this->lib->update($id,$data);

			if($result){

				$msg['msg']="data update successfully";
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


	public function delete(){

		if($this->input->post('delete')){

			extract($_POST);
			$this->load->model('dblib','lib');
			$result=$this->lib->delete($id);

			if($result){

				$msg['msg']="data delete successfully";
				$this->load->view('delete',$msg);
			}
			else{

				$msg['msg']='Somthing wrong try later';
				$this->load->view('delete',$msg);
			}
		}
		else{

			$this->load->view('delete');

		}
	}


} 

?>
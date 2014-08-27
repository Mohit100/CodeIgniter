<?php

class lib extends CI_Model{

	function insert($data){

		$result=$this->db->insert('personal',$data);

		if($result){
			return true;
		}
		else{
			return false;
		}
	} 

	function update($id,$data){

		
		$result=$this->db->update('personal',$data,array('id' => $id));

		if($result){

			return true;
		}
		else{
			return false;
		}
	}


	function delete($id){

		$result=$this->db->delete(array('id'=>$id));

		if($result){

			return true;
		}
		else{

			return false;
		}
	}


	function display($id){

		$this->db->select();

		$query = $this->db->get('persoanl');

		if($query){

			return $query;
		}
		else{
			return false;
		}
	}
}
?>
<?php

class dblib extends CI_Model{

	function insert($data){

		$result=$this->db->insert('friend',$data);

		if($result){
			return true;
		}
		else{
			return false;
		}
	} 

	function update($id,$data){

		
		$result=$this->db->update('friend',$data,array('id' => $id));

		if($result){

			return true;
		}
		else{
			return false;
		}
	}


	function delete($id){

		$result=$this->db->delete('friend',array('id'=>$id));		

		if($this->db->affected_rows()){

			return true;
		}
		else{

			return false;
		}
	}


	function display($id){

		$this->db->select();

		$query = $this->db->get('friend');

		if($query->num_rows()>0){

			return $query;
		}
		else{
			return false;
		}
	}
}
?>
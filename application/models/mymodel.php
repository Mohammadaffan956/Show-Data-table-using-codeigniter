<?php 
class mymodel extends CI_model {
	function selectdata(){
		$query = $this->db->select()->from('mydata')->get();
		return $query->result();
	}
	function deleterow($id){
		$this->db->where('User_id', $id)->delete('mydata');
		return true;
	}
	function showdata($id){
		$query = $this->db->get_where('mydata', array('User_id' => $id));
		return $query->result();
	}
	function updatedata($id , $inputs){
		$this->db->where('User_id', $id);
		$this->db->update('mydata', $inputs);
		return true;
	}
}
?>
<?php 

		Class student_table extends CI_Model{
			
			public function __construct(){
				parent:: __construct();
			}
			//this is for insertion of records
			public function insert($data){
				if($this->db->insert("student_table",$data){
					return true;
				}
			}
			//this is for deletion of records
			public function delete($roll_no){
				if($this->db->delete("student_table","$roll_no = ".$roll_no){
					return true;
				}
			}
			//this is for updating of records
			public function update($data,$old_roll_no){
				$this->db->set($data);
				$this->db->where("roll_no",$old_roll_no);
				$this->db->update("student_table",$data);
			}
		}
?>
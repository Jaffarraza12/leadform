<?php  

class user {
	
	var primary_id = "";
	var table = "";
	
	function __construct($persons_name) {		
			$this->primary_id = 'id';		
			$this->table = 'users';		
		}
		
	function getall(){
		 $sql = "SELECT * FROM '".$this->table."'";
		 $result = $conn->query($sql);
		 return $result->fetch_object();

	}

    function get($id){
		 $sql = "SELECT * FROM '".$this->table."' WHERE '".$this->primary_id."' = '".$id."'";
		 $result = $conn->query($sql);
		 $result->fetch_assoc();

	}	  	
	
	
    function save($data){
		 $sql = "INSERT INTO '".$this->table."' (name, email ,phone,location,gender)
VALUES ('".$data['name']."', '".$data['email']."', '".$data['phone']."'), '".$data['location']."'
, '".$data['gender']."'  ";";
		 $conn->query($sql)

	}	  	
		
	
	
}
?>
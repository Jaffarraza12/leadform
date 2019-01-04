<?php  

class user {
	
	var $primary_id = "users";
	var $table = "";
	var $con = "";
	
	function __construct($con) {		
			$this->primary_id = 'id';		
			$this->table = 'user';		
			$this->con = $con;		
		}
		
	function validate($data){
		 $sql = "SELECT * FROM ".$this->table." WHERE email = '".$data['email']."'" ;
         $query = $this->con->query($sql);
		 if ($query->num_rows > 0 ){
		   return 'Email Already subscribed';
		 
		 }
		
	}	
		
		
		
	function getall(){
		 $sql = "SELECT * FROM '".$this->table."'";
		 $result = $conn->query($sql);
		 return $result->fetch_object();

	}

    function get($id){
		 $sql = "SELECT * FROM ".$this->table." WHERE ".$this->primary_id." = '".$id."'";
		 $result = $conn->query($sql);
		 $result->fetch_assoc();

	}	  	
	
	
    function save($data){
		 $sql = "INSERT INTO ".$this->table." (name, email ,phone,location,gender,sts,mts)
VALUES ('".$data['name']."', '".$data['email']."', '".$data['phone']."' , '".$data['location']."'
, '".$data['gender']."',NOW(),NOW())";
		
		 if(!$this->con->query($sql)){
			   //echo("Error description: " . mysqli_error($this->con));
			   return false;
		 } else {
			return true;
		 }

	}	  	
		
	
	
}
?>
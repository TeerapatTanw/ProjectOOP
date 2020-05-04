<?php
include "db_config.php";

	class User{

		public $db;

		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

		public function reg_user($name,$username,$password,$email){

			$password = md5($password);
			$sql="SELECT * FROM users WHERE uname='$username' OR uemail='$email'";

			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			if ($count_row == 0){
				$sql1="INSERT INTO users SET uname='$username', upass='$password', uemail='$email'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}

		/*** for login process ***/
		public function check_login($emailusername, $password){

        	$password = md5($password);
			$sql2="SELECT * from users WHERE uname='$emailusername' and upass='$password'";
			
			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result);
			$count_row = $result->num_rows;
			
	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true;
				 $_SESSION['uid'] = $user_data['uid'];
				 $_SESSION['uname'] = $user_data['uname'];
	             header( "location: T.php" );
	        }
	        else{
			    return false;
			}
    	}
    	/*** for showing the username or fullname ***/

			

    	/*** starting the session ***/
	    public function get_session(){
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
		}
		
	}
	class admin extends User {
		public function check_login($emailusername, $password){
			$password = md5($password);
			$sql3="SELECT * from admin WHERE uname ='$emailusername' and upass='$password'";
        	$result = mysqli_query($this->db,$sql3);
        	$user_data = mysqli_fetch_array($result);
			$count_row = $result->num_rows;
	
			
	if ($count_row == 1) {
		// this login var will use for the session thing
		$_SESSION['login'] = true;
		 $_SESSION['uid'] = $user_data['uid'];
		 $_SESSION['uname'] = $user_data['uname'];
		 //$_SESSION['uname'] = $user_data['email'];
		 return true;
		}
		else {
			return false ;
		}
	}
	public function get_session(){
		return $_SESSION['login'];
	}
}
	
?>
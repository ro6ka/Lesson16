<?php 
class Connect {
	public $hostname;
	public $username;
	public $password;
	public $database;
	public $connect;

	function __construct ($hostname, $username, $password, $database){
		$this->connect = mysqli_connect ($this->hostname = $hostname,$this->username = $username,$this->password = $password,
		$this->database = $database);

		if(!$this->connect){
			die("Database Failed");
		}
	}
}


class AddNews {
	public $title;
	public $img;
	public $desc;
	public $text;
	public $status;
	public $date;
	public $connect;

	function __construct($connect, $title, $img, $img, $desc, $text, $status, $date) {
		$this->title=$title;
		$this->img=$img;
		$this->desc=$desc;
		$this->text=$text;
		$this->status=$status;
		$this->date=$date;
		$this->connect=$connect;
		$this->insert();

	}
		function insert(){
		$sql= "INSERT INTO news (news_title,news_thumbImg,news_img,news_desc,news_text,news_status,news_date) VALUES ('$this->title','$this->img','$this->img','$this->desc','$this->text','$this->status','$this->date') ";

		$query=mysqli_query($this->connect,$sql);

		if ($query) {
			echo "sen yaxci oglansan<br>";
		}else{
			echo "Get ayna<br>";
		}
	}
}

class Reg {

	public $name;
	public $surname;
	public $email;
	public $password;
	public $connect;

		function __construct($connect, $name, $surname, $email, $password) {
		$this->name= $name;
		$this->surname = $surname;
		$this->email = $email;
		$this->password = $password;
		$this->connect=$connect;
		$this->register();

	}

	function register (){
		$reg ="INSERT INTO users (user_name, user_surname, user_email, user_password) VALUES ('$this->name','$this->surname','$this->email','$this->password') ";

		$query=mysqli_query($this->connect,$reg);
		if($query){
			echo ("Registered");
		}
	}
}

class Login {
	public $email;
	public $password;
	public $connect;

	function __construct ($connect, $email, $password){
		$this->email = $email;
		$this->password = $password;
		$this->logIn();
	}

	function logIn (){
		$sql="SELECT * FROM users WHERE user_email='$this->email' AND user_password='$this->password' ";

		$query=mysqli_query($this->connect,$sql);
		if($query){
			echo("Welcom back");
		}
	}

}



 ?>
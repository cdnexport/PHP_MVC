<?php
	class User{
		protected $db;
		protected $user;

		public function __construct(PDO $db){
			$this->db = $db;
		}

		public function get($username){
			$username = (string)$username;

			$user = $this->db->query("SELECT username FROM users WHERE username = '{$username}'");

			return $this->user = $user->fetch(PDO::FETCH_OBJ);
		}

		public function login($name, $password){
			$user = $this->db->query("SELECT username, passwordhash FROM users WHERE username = '{$name}'")->fetch(PDO::FETCH_OBJ);
			if(!isset($user->username) || !password_verify($password,$user->passwordhash)){
				return ["success"=>false, "error"=>"Username or password are incorrect."];
			}
			else{
				$_SESSION['username'] = $user->username;
				header("Location: ".ASSET_ROOT);
			}
		}

		public function createUser($name, $email, $password, $password2){
			$name = filter_var(trim($name), FILTER_SANITIZE_SPECIAL_CHARS);
			$email = filter_var(trim($email), FILTER_SANITIZE_SPECIAL_CHARS);
			$password = filter_var(trim($password), FILTER_SANITIZE_SPECIAL_CHARS);
			$password2 = filter_var(trim($password2), FILTER_SANITIZE_SPECIAL_CHARS);

			if(!$name || !$email || !$password || !$password2){
				return ["success"=>false, "error"=>"All fields must contain a value"];
			}
			else if(strpos($name,' ') + strpos($email, ' ') + strpos($password, ' ') + strpos($password2,' ') > 0){
				return ["success"=>false, "error"=>"White space is not allowed."];
			}
			else if($password != $password2){
				return ["success"=>false, "error"=>"Passwords must match.", "name"=>$name, "email"=>$email];
			}

			$user = $this->db->query("SELECT username, email FROM users WHERE username = '{$name}' OR email = '{$email}'")->fetch(PDO::FETCH_OBJ);
			if(!$user) {
				$query = "INSERT INTO Users (Username, PasswordHash, Email, DateJoined, IsMod ) values (:Username, :PasswordHash, :Email, :DateJoined, :IsMod)";
				$statement = $this->db->prepare($query);
				$statement->bindValue(':Username', $name);
				$statement->bindValue(':PasswordHash', password_hash($password, PASSWORD_BCRYPT, ['cost'=>12]));
				$statement->bindValue(':Email', $email);
				$statement->bindValue(':DateJoined',date("Y-m-d H:i:s"));
				$statement->bindValue(':IsMod',false);
				$statement->execute();
				$this->login($name,$password);
			}
			else{
				return ["success"=>false, "error"=>"Username or email is already registered."];
			}
		}
	}
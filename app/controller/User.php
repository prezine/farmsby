<?php
	/**
	 * 
	 */
	class Users extends Database
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn;
		}
		public function userData()
		{
			$conn = $this->conn;
			return $this->select("SELECT * FROM users WHERE userID = ". $this->getSession('userID'), true);
		}
		public function allRef($userID)
		{
			$conn = $this->conn;
			return $this->select("SELECT * FROM users WHERE refID = ". $userID, true, true);
		}
		public function retreiveRefID($token = '')
		{
			$conn = $this->conn;
			return $this->select("SELECT userID FROM users WHERE userToken ='$token'");
		}
	}
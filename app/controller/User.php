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
			return $this->select("SELECT userID, name FROM users WHERE userToken ='$token'");
		}
		public function retreiveuserID($userID = '', $row = '')
		{
			$conn = $this->conn;
			return $this->select("SELECT $row FROM users WHERE userID ='$userID'");
		}
		public function grabBankData()
		{
			$conn = $this->conn;
			return $this->select("SELECT * FROM bank WHERE userID = ". $this->getSession('userID'), true);
		}
		public function addBankData($data = '')
		{
			$conn = $this->conn;
			$checkIfExist = $this->select("SELECT * FROM bank WHERE userID = ". $this->getSession('userID'), true);
			if ($checkIfExist == "null") {
				return $this->insert('bank', $data);
			} else {
				return $this->update("UPDATE bank SET accountName='".$data['accountName']."', accountNumber='".$data['accountNumber']."', bankName='".$data['bankName']."' WHERE userID=". $this->getSession('userID'));
			}
		}
	}
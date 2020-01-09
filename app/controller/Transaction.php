<?php
	/**
	 * 
	 */
	class Transaction extends Database
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn;
		}
		public function getTable()
		{
			$conn = $this->conn;
			$this->viewJson();
			return $this->select('SELECT * FROM invest WHERE userID='. $this->getSession('userID'), true, true);
		}
	}
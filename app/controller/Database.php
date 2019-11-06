<?php
	/**
	 * 
	 */
	class Database extends Farmsby
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn;
		}
		public function select($query = '')
		{
			$req = $this->query($query);
			if ($this->numRow(($req) > 1)) {
				return $this->fetch($req);
			} else {
				return $this->error();
			}
		}
		public function query($query = '')
		{
			$conn = $this->conn;
			return mysqli_query($conn, $query);
		}
		public function numRow($query = '')
		{
			return mysqli_num_row($query);
		}
		public function fetch($query = '')
		{
			return mysqli_fetch_assoc($query);
		}
		public function error()
		{
			$conn = $this->conn;
			return mysqli_error($conn);
		}
	}
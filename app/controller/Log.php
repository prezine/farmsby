<?php
	/**
	 * 
	 */
	class LogActivities extends Database
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn;
		}
		public function log($data)
		{
			$conn = $this->conn;
			return $this->insert('analytics', $data);
		}
		public function grabLogs()
		{
			$conn = $this->conn;
			return 
			$this->select('SELECT * FROM analytics WHERE userID ='. $this->getSession('userID') .' ORDER BY analyticID DESC ', true, true);
		}
	}
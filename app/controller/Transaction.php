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
			//$this->viewJson();
			return $this->select('SELECT * FROM invest WHERE userID='. $this->getSession('userID'), true, true);
		}
		public function recordNewInvestment($data)
		{
			$conn = $this->conn;
			return $this->insert('invest', $data);
		}
		public function generateReceipt($ref = '')
		{
			$conn = $this->conn;
			return $this->select("SELECT * FROM invest WHERE trasaction_ref='$ref'", true);
		}
		public function transactionStatus($int)
		{
			if ($int == 0) {
				return 'In progress';
			} else if ($int == 1) {
				return 'Completed';
			} else if ($int == 2) {
				return 'Closed';
			} else {
				return NULL;
			}
		}
		public function typeToPercent($farm_mode)
		{
			return ($farm_mode == "Standard Investment") ? SI_ANNUAL_PERCENT : JV_ANNUAL_PERCENT;
		}
	}
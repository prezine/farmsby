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
		public function getActiveTable()
		{
			$conn = $this->conn;
			//$this->viewJson();
			return $this->select('SELECT * FROM invest WHERE status="0" AND userID='. $this->getSession('userID'), true, true);
		}
		public function recordNewInvestment($data)
		{
			$conn = $this->conn;
			return $this->insert('invest', $data);
		}
		public function generateReceipt($ref = '')
		{
			$conn = $this->conn;
			return $this->select("SELECT * FROM invest WHERE transaction_ref='$ref'", true);
		}
		public function withdrawProfitOnly($investID = '', $withdrawalAmt = '')
		{
			$conn = $this->conn;
			$updateTable = $this->update("UPDATE invest SET request_withdrawal='1', status='1', withdrawalAmt='$withdrawalAmt', dateRequestWithdrawals='GLOBAL_DATE' WHERE investID='$investID'");
			$grabTransactionData = $this->select("SELECT * FROM invest WHERE investID='$investID'", true);
			$transactionDecode = json_decode($grabTransactionData, true);	
			$invest = array(
				'userID' => $this->getSession('userID'),
				'farm_mode' => $transactionDecode['farm_mode'],
				'amount' => $transactionDecode['amount'],
				'monthCycle' => $transactionDecode['monthCycle'],
				'transaction_ref' => rand(1, 1000000000),
				'status' => 0,
				'bonusUserID' => 0,
				'bonusAmount' => 0,
				'request_withdrawal' => 0,
				'requestBonus' => 0,
				'is_paidBonus' => 0,
				'is_paid' => 0,
				'withdrawalAmt' => 0,
				'dateRequestWithdrawals' => 0,
				'datePaid' => 0, 
				'dateInvested' => GLOBAL_DATE
			);
			if ($updateTable == 200) {
				return $this->recordNewInvestment($invest);
			} else {
				return $updateTable;
			}
		}
		public function withdrawAll($investID = '', $withdrawalAmt = '')
		{
			$conn = $this->conn;
			$grabTransactionData = $this->select("SELECT * FROM invest WHERE investID='$investID'", true);
			$tDecode = json_decode($grabTransactionData, true);
			$withdrawalAmt = str_replace(',', '', $tDecode['amount']) + str_replace(',', '', $withdrawalAmt);
			return $this->update("UPDATE invest SET request_withdrawal='1', status='1', withdrawalAmt='$withdrawalAmt', dateRequestWithdrawals='".GLOBAL_DATE."' WHERE investID='$investID'");
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
		public function buttonController($status = '')
		{
			return ($status == 1) ? 'disabled=""' : NULL;
		}
		public function typeToPercent($farm_mode)
		{
			return ($farm_mode == "Standard Investment") ? SI_ANNUAL_PERCENT : JV_ANNUAL_PERCENT;
		}
	}
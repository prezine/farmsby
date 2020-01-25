<?php
	/**
	 * 
	 */
	class DataCollection extends Farmsby
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn;
		}
		public function banks()
		{
			$bankData = array(
				1 => "Access Bank Plc",
				2 => "Citibank Nigeria Limited",
				3 => "Diamond Bank Plc",
				4 => "Ecobank Nigeria Plc",
				5 => "Fidelity Bank Plc",
				6 => "FIRST BANK NIGERIA LIMITED",
				7 => "First City Monument Bank Plc",
				8 => "Globus Bank Limited",
				9 => "Guaranty Trust Bank Plc",
				10 => "Heritage Banking Company Ltd",
				11 => "Key Stone Bank",
				12 => "Polaris Bank",
				13 => "Providus Bank",
				14 => "Stanbic IBTC Bank Ltd",
				15 => "Standard Chartered Bank Nigeria Ltd",
				16 => "Sterling Bank Plc",
				17 => "SunTrust Bank Nigeria Limited",
				18 => "Titan Trust Bank Ltd",
				19 => "Union Bank of Nigeria Plc",
				20 => "United Bank For Africa Plc",
				21 => "Unity Bank Plc",
				22 => "Wema Bank Plc",
				23 => "Zenith Bank Plc"
			);
			return json_encode($bankData);
		}
	}
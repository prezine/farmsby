<?php
	/**
	 * 
	 */
	class Algorithm
	{
		public function percentage($perc, $amt)
		{
			return ($perc / 100) * $amt ;
		}
		public function calcProfit($amt, $dateInvested, $type)
		{
			$totalSecondsInAYear = 60 * 60 * 24 * 30 * 12; // 31104000
			$diffInInvestmentDate = $this->diffDateToSeconds($dateInvested, GLOBAL_DATE);
			$totalPecentageInSeconds = $type / $totalSecondsInAYear;
			$current_perc = $totalPecentageInSeconds * $diffInInvestmentDate;
			$perc = $this->percentage($current_perc, $amt);
			return number_format(round($perc));
		}
		public function diffDateToSeconds($ts1, $ts2)
	    {
	        $ts1 = strtotime($ts1);
	        $ts2 = strtotime($ts2);
	        $difference_in_seconds = $ts2 - $ts1;
	        return $difference_in_seconds;
	    }
	    public function receipt($invType = '', $amt = '', $tenure = '', $row)
	    {
	    	$splitPercetage = ($invType == "Standard Investment") ? 50 / 12 : 75 / 12 ;
			if ($tenure == 3) {
				$calc = (($splitPercetage * 3) / 100) * $amt;
			} else if ($tenure == '6') {
				$calc = (($splitPercetage * 6) / 100) * $amt;
			} else if ($tenure == '9') {
				$calc = (($splitPercetage * 9) / 100) * $amt;
			} else {
				$calc = (($splitPercetage * 12) / 100) * $amt;
			}
			$data = array(
				'gross_profit' => $calc,
				'tax_on_profit' => $this->percentage(5, $calc),
				'net_profit' => $calc - $this->percentage(5, $calc),
				'total_amount' => $amt + ($calc - $this->percentage(5, $calc))
			);
	    	return number_format($data[$row]);
	    }
	}
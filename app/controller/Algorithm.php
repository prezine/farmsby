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
	}
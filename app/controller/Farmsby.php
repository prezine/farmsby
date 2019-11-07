<?php
	/**
	 * 
	 */
	class Farmsby
	{
		private $app_name;
		private $app_version;
		public function __construct()
		{
			$this->app_name = "Farmsby";
			$this->app_version = "v1.0";
		}
		public function app_name()
		{
			return $this->app_name;
		}
		public function version()
		{
			return $this->version;
		}
		public function viewJson()
		{
			header("Content-Type: Application/json");
		}
	}
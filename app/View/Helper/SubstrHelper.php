<?php
	
	class SubstrHelper extends AppHelper{

		public function limit($text,$limit = null){

			if(!isset($limit)){
				$limit = 140;
			}

			if(strlen($text) > $limit){

				$text =  substr($text,0,$limit).' ...';
			}

			return $text;

		} 

		
	}
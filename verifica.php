<?php
	
	function verifica($var){
		if(isset($var) && !empty($var)){
			return true;
		}
		else{
			return false;
		}
	}
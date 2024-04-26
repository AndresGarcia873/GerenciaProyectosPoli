<?php 
	class UtilView{
		function __construct(){

		}
		function loadScreen($nombre){
			require 'co.edu.poli.views/' . $nombre . '.php';
		}
	}
?>
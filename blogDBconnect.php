<?php
	class blogDB
	{
		function dbconnect()
		{
			$conn=new mysqli('localhost','root','','login');
			return $conn;
		}
	}
		

?>
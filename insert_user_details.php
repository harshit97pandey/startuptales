<?php

				$mydb=new mysqli("localhost","root","","login");
				if($mydb)
				{
					echo "connected";
					$cert_array=$_REQUEST['cert_array'];
					$sector_array=$_REQUEST['sector_array'];
					$skill_array=$_REQUEST['skill_array'];
					$qual=$_REQUEST['qualification'];
					$city=$_REQUEST['city'];
					$username=$_REQUEST['username'];
					$myquery=mysqli_query($mydb,"INSERT INTO userprofile (username,qualification,city) VALUES ('$username','$qual','$city')");
					foreach($cert_array as $val)
					{
						$myquery=mysqli_query($mydb,"INSERT INTO skillmap (username,skill_name) VALUES ('$username','$val')");
					}
					foreach($sector_array as $val)
					{
						$myquery=mysqli_query($mydb,"INSERT INTO sector (username,sect) VALUES ('$username','$val')");
					}
					foreach($cert_array as $val)
					{
						$myquery=mysqli_query($mydb,"INSERT INTO certifications (username,cert) VALUES ('$username','$val')");
					}
					echo "inserted into DB";
				}
				else
				{
					echo "not connected";
				}
?>
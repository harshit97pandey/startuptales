<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link=new mysqli("localhost","root","","login");
if($link){echo "connected";}
else{echo "not connected";}
$arr=array();
if(isset($_POST['array_loc']))
{
		$loc_array=$_REQUEST['array_loc'];
		//echo "<br>inside location: ";
		//print_r($loc_array);
		$loc_array=array_unique($loc_array);
		foreach($loc_array as $id)
		{
			$loc=array("city",$id);
			array_push($arr,$loc);
		}
}

if(isset($_POST['array_sector']))
{
		$loc_array=$_REQUEST['array_sector'];
		//echo "<br>inside location: ";
		//print_r($loc_array);
		$sector_array=array_unique($loc_array);
		foreach($sector_array as $id)
		{
			$loc=array("sect",$id);
			array_push($arr,$loc);
		}
}

print_r($arr);
/*$str=$arr[0][0];
$que="select distinct users.username,users.fname,users.lname,users.email,users.phone,userprofile.city from users,userprofile,skillmap,sector,certifications  ";
//echo($str);
		for($i=0;$i<sizeof($arr);$i++)
          		{//2
           		if(!strcmp($str,$arr[$i][0]))
                        	  {
				if($i==0)
				{
					$que=$que." where ($str='".$arr[$i][1]." ' ";                          
				  }
				else
				{
				$que=$que." or $str = '".$arr[$i][1]." ' ";	
                       	                        
				}
                         }
			else
			{
			    $str=$arr[$i][0];

				$que=$que. ") and ($str = '".$arr[$i][1]."'";              
			
			}

			}
			;
			$que=$que.")";  
			$que=$que." and users.username=userprofile.username and userprofile.username=skillmap.username and userprofile.username=sector.username and userprofile.username=certifications.username";
				//echo($que);
				$crx=array();
			$query=mysqli_query($link,$que);
			while($row=mysqli_fetch_array($query))
			{
				array_push($crx,array('username'=>$row['username'],'city'=>$row['city'],'fname'=>$row['fname'],'lname'=>$row['lname'],'email'=>$row['email'],'phone'=>$row['phone']));
				
			}
			
			echo json_encode($crx);
					//	echo json_encode($crx);*/
mysqli_close($link);

?>
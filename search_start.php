<?php


$link=new mysqli("localhost","root","","login");
$arr=array();
if(isset($_POST['array_loc']))
{
		$loc_array=$_REQUEST['array_loc'];
		//echo "<br>inside location: ";
		//print_r($loc_array);
		$loc_array=array_unique($loc_array);
		foreach($loc_array as $id)
		{
			$loc=array("location",$id);
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


$str=$arr[0][0];
$que="select distinct users.username,users.fname,users.lname,users.email,users.phone,comapanyprofile.location from users,comapanyprofile,sector";
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
			$que=$que." and users.username=comapanyprofile.username";
				
				$crx=array();
			$query=mysqli_query($link,$que);
			while($row=mysqli_fetch_array($query))
			{
				array_push($crx,array('username'=>$row['username'],'location'=>$row['location'],'fname'=>$row['fname'],'lname'=>$row['lname'],'email'=>$row['email'],'phone'=>$row['phone']));
				
			}
			
			echo json_encode($crx);


?>
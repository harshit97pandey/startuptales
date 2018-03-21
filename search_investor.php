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
			$loc=array("industry",$id);
			array_push($arr,$loc);
		}
}


$str=$arr[0][0];
$que="select * from hack";
//echo($str);
		for($i=0;$i<sizeof($arr);$i++)
          		{//2
           		if(!strcmp($str,$arr[$i][0]))
                        	  {
				if($i==0)
				{
					$que=$que." where ($str = '".$arr[$i][1]."' ";                          
				  }
				else
				{
				$que=$que." or $str= '".$arr[$i][1]."' ";	
                       	                        
				}
                         }
			else
			{
			    $str=$arr[$i][0];

				$que=$que. ") and ($str= '".$arr[$i][1]."'";              
			
			}

			}
			
			$que=$que.")";  
			//$que=$que." and users.username=investorprofile.username";
			//echo $que;
			$crx=array();
			$query=mysqli_query($link,$que);
			if($query)
			{
					while($result=mysqli_fetch_array($query))
					{
						array_push($crx,array('date'=>$result['date'],'startup_name'=>$result['startup_name'],'industry_col'=>$result['industry'],'sub_vertical'=>$result['sub-vertical'],'city'=>$result['city'],'investors'=>$result['investors'],'investment_type'=>$result['investment _type'],'amount'=>$result['amount']));
						
					}
			
			echo json_encode($crx);
			}
			//else{echo "improwquery";}


?>
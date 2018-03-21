<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "login");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$arr=array();
if(isset($_POST['array_loc']))
{
		$loc_array=$_REQUEST['array_loc'];
		$loc_array=array_unique($loc_array);
		foreach($loc_array as $id)
		{
			$loc=array("state",$id);
			array_push($arr,$loc);
		}
}

if(isset($_POST['array_activity']))
{
		$loc_array=$_REQUEST['array_activity'];
		$sector_array=array_unique($loc_array);
		foreach($sector_array as $id)
		{
			$loc=array("activity",$id);
			array_push($arr,$loc);
		}
}

//print_r($arr);
$str=$arr[0][0];
$que="select  distinct *  from test  ";
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

				$que=$que. ") and ($str like '%".$arr[$i][1]."%'";              
			
			}

			}
			;
			$que=$que.")";  
			//$que=$que." orde";
				//echo($que);
				$crx=array();
			$query=mysqli_query($link,$que);
			while($row=mysqli_fetch_array($query))
			{
				array_push($crx,array('id'=>$row['id'],'cin'=>$row['cin'],'con'=>$row['con'],'doi'=>$row['doi'],'state'=>$row['state'],'roc'=>$row['roc'],'category'=>$row['category'],'subcategory'=>$row['subcategory'],'class'=>$row['class'],'authorized_capital'=>$row['authorized_capital'],'paid_capital'=>$row['paid_capital'],'activity'=>$row['activity'],'address'=>$row['address']));
				
			}
			
			echo json_encode($crx);
					//	echo json_encode($crx);
mysqli_close($link);

?>
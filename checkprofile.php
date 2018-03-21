<?php
	session_start();
	$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
	include 'login/user.php';
	$user = new User();
	require 'blogDBconnect.php';
	header("Content-type: text/javascript");

	if(!empty($sessData['status']['msg']))
	{
		$statusMsg = $sessData['status']['msg'];
		$statusMsgType = $sessData['status']['type'];
		unset($_SESSION['sessData']['status']);
	}
		if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID']))
		{
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
				$myrec=$userData['username'];
				$type=$userData['type'];
				
				header("Content-type: text/javascript");
				$myobj=new blogDB();
				$myconn=$myobj->dbconnect();
				$myarray=array();
				if($myconn)
				{
					
					if($type=="User")
					{
						$sql_query=mysqli_query($myconn,"select * from userprofile where username='$myrec'");
						if(mysqli_num_rows($sql_query)==1)
						{
							while($row=mysqli_fetch_array($sql_query))
							{
								array_push($myarray,array('result'=>'true','username'=>$row['username'],'qualification'=>$row['qualification'],'certification'=>$row['certification'],'city'=>$row['city'],'sector'=>$row['sector']));
							}
							 header('Content-Type: application/json');
							echo json_encode($myarray);
						}
						else if(!mysqli_num_rows($sql_query))
						{
							array_push($myarray,array('result'=>'false'));
							echo json_encode($myarray);
						}
					}
					if($type=="Investor")
					{
						$sql_query=mysqli_query($myconn,"select * from investorprofile where username='$myrec'");
						if(mysqli_num_rows($sql_query)==1)
						{
						
							while($row=mysqli_fetch_array($sql_query))
							{
								array_push($myarray,array('result'=>'true','username'=>$row['username'],'pastinvest'=>$row['pastinvest'],'location'=>$row['location'],'organization'=>$row['organization'],'sector'=>$row['sector'],'description'=>$row['description']));
							}
							echo json_encode($myarray);
						}
						else if(!mysqli_num_rows($sql_query))
						{
							array_push($myarray,array('result'=>'false'));
							echo json_encode($myarray);
						}
						
					}
					 if($type=="Startup")
					{
						$sql_query=mysqli_query($myconn,"select * from comapanyprofile where username='$myrec'");
						if(mysqli_num_rows($sql_query)==1)
						{
							while($row=mysqli_fetch_array($sql_query))
							{
								array_push($myarray,array('result'=>'true','username'=>$row['username'],'estab'=>$row['estab'],'objectives'=>$row['objectives'],'sector'=>$row['sector'],'milestones'=>$row['milestones'],'investors'=>$row['investors'],'story'=>$row['story'],'location'=>$row['location']));
							}
							 header('Content-Type: application/json');
							echo json_encode($myarray);
						}
						else if(!mysqli_num_rows($sql_query))
						{
							array_push($myarray,array('result'=>'false'));
							echo json_encode($myarray);
						}
					}
					
	
				}
		}
else
{
	echo "You need to login first";
}
?>
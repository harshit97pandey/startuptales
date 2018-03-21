<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
				include 'login/user.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
				$name=$userData['username'];
				$pastinvest=$_REQUEST['pastinvest'];
				$location=$_REQUEST['location'];
				$sector=$_REQUEST['sector'];

				$org=$_REQUEST['org'];
				$desc=$_REQUEST['desc'];
				$mysql=mysqli_connect("localhost","root","","login");

	if(mysqli_connect_errno())
	{
	printf("connection failed");
	exit(0);
	}
	
	else
	{
		$sql="INSERT INTO  investorprofile(username,pastinvest,location,sector,organization,description)VALUES ('$name','$pastinvest','$location','$sector','$org','$desc')";
		$res=mysqli_query($mysql,$sql);
		if($res==TRUE)
		{
			echo "successful";
		}
	}
}
?> 
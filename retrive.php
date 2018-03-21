<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
$sector_array=array();
if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
				include 'login/user.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
				
				$oname=$userData['username'];
				$established=$_REQUEST['established'];
				$location=$_REQUEST['location'];
				$obj=$_REQUEST['obj'];
				$miles=$_REQUEST['miles'];
				$story=$_REQUEST['story'];
				$investor=$_REQUEST['investor'];
				$sector_array=$_REQUEST['sector_array'];
				print_r($sector_array);
				$mysql=mysqli_connect("localhost","root","","login");
	
	
		$sql="INSERT INTO  comapanyprofile(username,estab,objectives,milestones,investors,story,location)VALUES ('$oname','$established','$obj','$miles','$investor','$story','$location')";
		foreach($sector_array as $id)
		{
			echo $id.' '.$oname;
			$sql1=mysqli_query($mysql,"INSERT INTO sector(username,sect)VALUES ('$oname','$id')");
		}
		$res=mysqli_query($mysql,$sql);
			//echo "success";
		

	
}

?> 
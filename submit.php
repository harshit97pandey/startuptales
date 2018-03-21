<?php
require "blogDBconnect.php";
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID']))
{
	
		include 'login/user.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
				
				$link=new mysqli('localhost','root','','login') or die('failed');
				$title=$_POST['title'];
				$image=$_POST['url'];
				$category=$_POST['category'];
				$content=$_REQUEST['content'];
				$date = $_POST['cdate'];
				$name=$userData['fname']." ".$userData['lname'];
				$query = mysqli_query($link,"INSERT INTO blog (title, featured_image, category, content,name,createdon) VALUES ('$title','$image','$category','$content','$name','$date')");
				if($query)
				{
				echo "Form Submitted Succesfully";
				}
				else
				{
					echo "Form Not Submitted ";
				}
				mysqli_close($link);
	} // Connection Closed
?>
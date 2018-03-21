<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration and Login </title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript">
	$(function(){

    $('input:radio').change(function(){
        if(document.getElementById('user').checked==true)
		{
			$("#dob").show();
			$("#url").hide();
		}
		if(document.getElementById('investor').checked==true)
		{
			$("#dob").show();
			$("#url").attr('placeholder',"INVESTOR'S URL");
			$("#url").show();
			$("#dob").attr('placeholder',"INVESTOR'S DOB");
		}
		if(document.getElementById('startup').checked==true)
		{
			$("#url").show();
			$("#url").attr('placeholder',"START UP'S URL");
			$("#dob").hide();
		}		
    });          

});
	</script>
	</head>
<body>
    <h1>USER REGISTRATION</h1>
	<div class="container" style="background-color:#ccebff">
		<h2>Create a New Account</h2>
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="text" name="first_name" placeholder="FIRST NAME" required="">
				<input type="text" name="last_name" placeholder="LAST NAME" required="">
				<input type="email" name="email" placeholder="EMAIL" required="">
				<input type="text" name="phone" placeholder="PHONE NUMBER" required="">
				<input type="text" name="username" placeholder="CHOOSE A USERNAME" required="">
				<input type="password" name="password" placeholder="PASSWORD" required="">	
				<input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
				<input id="url" class="url" type="text" name="url" placeholder="YOUR URL" style="display:none">
				<input id="dob" type="date" class="dob" name="dob" placeholder="D.O.B" style="display:none" >
				<input type="radio" name="opt" value="User" id="user"><label for="user">User</label>
				<input type="radio" name="opt" value="Investor" id="investor"><label for="investor">Investor</label>
				<input type="radio" name="opt" value="Startup" id="startup"><label for="startup">Startup</label>
				
				<!--
				<!--
				<!--
				-->
				<div class="send-button">
					<input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
				</div>
			</form>
				
		</div>
	</div>
</body>
	
</html>
<?php
$myrec=$_REQUEST['username'];
echo "i sent ".$myrec;
$mycon=new mysqli("localhost","root","","login");
if($mycon)
{
	$sql1=mysqli_query($mycon,"SELECT skills.skill_name from skills where username='$myrec'");
	while($row=mysqli_fetch_array($sql1))
	{
		
	}
	
}
else
{
	
}


?>
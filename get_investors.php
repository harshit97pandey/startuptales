<?php
$link=new mysqli("localhost","root","","login");

$crx=array();
if($link)
{
	$arr=mysqli_query($link,'select * from hack');
	//$arr=mysqli_query($mycon,'SELECT * FROM blog');
	while($result=mysqli_fetch_array($arr))
	{
		array_push($crx,array('date'=>$result['date'],'startup_name'=>$result['startup_name'],'industry_col'=>$result['industry'],'sub_vertical'=>$result['sub-vertical'],'city'=>$result['city'],'investors'=>$result['investors'],'investment_type'=>$result['investment _type'],'amount'=>$result['amount']));
	}
	echo json_encode($crx);


}
else
{
	echo "connection_aborted";
}



?>

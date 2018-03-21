<?php
require 'blogDBconnect.php';
/* set out document type to text/javascript instead of text/html */
header("Content-type: text/javascript");

/* our multidimentional php array to pass back to javascript via ajax */
$obj=new blogDB();
$mycon=$obj->dbconnect();
$crx=array();
if($mycon)
{
	$arr=mysqli_query($mycon,'SELECT * FROM blog order by id desc limit 20');
	//$arr=mysqli_query($mycon,'SELECT * FROM blog');
	while($result=mysqli_fetch_array($arr))
	{
		array_push($crx,array('id'=>$result['id'],'name'=>$result['name'],'title'=>$result['title'],'featured_image'=>$result['featured_image'],'category'=>$result['category'],'content'=>$result['content'],'date'=>$result['createdon']));
	}
}
else
{
	echo "connection_aborted";
}
/* encode the array as json. this will output [{"first_name":"Darian","last_name":"Brown","age":"28","email":"darianbr@example.com"},{"first_name":"John","last_name":"Doe","age":"47","email":"john_doe@example.com"}] */
    header('Content-Type: application/json');

echo json_encode($crx);

?>

<?php
$link=new mysqli("localhost","root","","login");
if($link)
{
	echo "connected";
}
if($link)
{
	$id=$_REQUEST['id'];
	$corp_idn_no=$_REQUEST['corp_idn_no'];
	echo $id.' '.$corp_idn_no;
	/*$date_reg=$_REQUEST['date_reg'];
	$company_name=$_REQUEST['company_name'];
	$company_status=$_REQUEST['company_status'];
	$company_class=$_REQUEST['company_class'];
	$company_category=$_REQUEST['company_category'];
	$auth_cap=$_REQUEST['auth_cap'];
	$paid_cap=$_REQUEST['paid_cap'];
	$reg_state=$_REQUEST['reg_state'];
	$registrar_company=$_REQUEST['registrar_company'];
	$priple_act=$_REQUEST['priple_act'];
	$reg_office_add=$_REQUEST['reg_office_add'];
	$subcategory=$_REQUEST['subcategory'];*/
	
	
	$myquery=mysqli_query($link,"INSERT INTO reg_company_details(id,cin,date_of_reg,company_name,company_status,company_class,company_category,auth_capital,paidup_capital,reg_state,registrar_comp,business_activity,reg_office_address,sub_category) VALUES ('$id','$corp_idn_no','$date_reg','$company_name','$company_status','$company_class','$company_category','$auth_cap','$paid_cap','$reg_state','$registrar_company','$priple_act','$reg_office_add','$subcategory')");
	if($myquery)
	{
		echo "DAta inserted";
	}
	else{echo "data not inserted";}
}
//else{echo "DB not connencted";}


?>
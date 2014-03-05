<?php
	require_once('jconfig.php');
	require_once('jconn.php'); 

	//get variables
	$emailid=strtolower(addslashes(strip_tags($_POST['email'])));
	$fullname=addslashes(strip_tags($_POST['name']));
	$year=addslashes(strip_tags($_POST['year']));
	$uname=addslashes(strip_tags($_POST['uname']));
	$dept=addslashes(strip_tags($_POST['dept']));
	$usertype=addslashes(strip_tags($_POST['usertype']));
	
	//check if all data present
	if($emailid=='' || $fullname=='' || $year=='' || $uname=='' || $dept=='' || $usertype=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}

	//validate legal emailid
	if (!filter_var($emailid, FILTER_VALIDATE_EMAIL))
	{
		$flag_emailid=1;
		$err_occured=1;
	}

	//uname existence check, then entry
	if($err_occured!=1)
	{
	
		$tbl_name=__SQL_TABLE_PREFIX__ . "users";
		$sql_query="SELECT COUNT(*) AS existing FROM $tbl_name WHERE uname='$uname'";
		$query_result=mysql_query($sql_query);
		$result_rows=mysql_fetch_array($query_result);
		$existing_count=$result_rows['existing'];
		if($existing_count!=0) 
		{
			$flag_exists_emailid=1;
		}
		else
		{
			//put info
			$tbl_name=__SQL_TABLE_PREFIX__ . "users"; 
			$sql_query_2="INSERT INTO $tbl_name(emailid,fullname,year,uname,dept,usertype) VALUES('$emailid','$fullname','$year','$uname','$dept','$usertype')";
			$query_result_2=mysql_query($sql_query_2);
			if(!$query_result_2)
			{
				$flag_sqlfail=1;
			}
			else
			{
				{
					$flag_success=1;
					//survey sql
					$email_msg='Thank You signing up with Jolites' . $password . '. Return to our Main Site.';
					mail($emailid,'Jolites. ',$email_msg,'From: noreply@jeclat.in');
				}
			}
		}
	}		
		mysql_close($con);

//feedback to user	
	$err_string="location:reunion.php?r=";
	if($flag_confail==1 || $flag_sqlfail==1)
	{
		$err_string=$err_string . "sqlerror";
	}
	else if($flag_incomplete==1)
	{
		$err_string=$err_string . "incomplete";
	}
	else if($flag_emailid==1)
	{
		$err_string=$err_string . "invalidemail";
	}
	else if($flag_exists_emailid==1)
	{
		$err_string=$err_string . "emailexists";
	}
	else
	{
		$err_string=$err_string . "success";
	}
	header($err_string . "#fdbck");
	header('index.php');
?>
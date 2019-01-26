
<?php
$username="";
$password="";
$errorMsg="";
$num_rows=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
	$username=$_POST['user'];
	$password=$_POST['pword'];
	
	$username=trim($username);
	$password=trim($password);
	
	$username=htmlspecialchars($username);
	$password=htmlspecialchars($password);
	
	$user_name="ranjahin@localhost";
$pass_word"";
$database="Login";
$server="104.161.23.12";

$db_handle=mysql_connect($server,$user_name,$pass_word);
$db_found= mysql_select_db($database,$db_handle);

if($db_found){
	$username=mysql_real_escape_string($username,$db_handle);
	$password=mysql_real_escape_string($password,$db_handle);
	
	$SQL="SELECT*FROM tb_login WHERE uname='$username' AND pword='$password'";
	$result=mysql_query($SQL);
	
	if($result){
		$num_rows=mysql_num_rows($result);
		
		if($num_rows>0){
			session_start();
			$_SESSION['login']="1";
			header("location:http://www.ranjahinvestments.co.ke/Admin/postart.html");
		}
		else{
			$errorMsg="Invalid Login";
			session_start();
			$_SESSION['login']='';
			mysql_close($db_handle);
		}
	}
	else{
		$errorMsg="Error logging in";
	}
}
else{
	$errorMsg="Error logging on";
}
}

print $errorMsg;
?>

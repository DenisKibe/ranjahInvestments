<html>
<head>
<script type="text/javascript">
function Redirect(){
	window.location="http://www.ranjahinvestments.co.ke/Admin/postart.php"
}
document.write("you will be redirected in 5sec");
setTimeout('Redirect()',5000);
</script>
</head>
<body>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_REQUEST['submitwa'])){
$title=$_POST['arttitle'];
$article=$_POST['writeart'];

$title=htmlspecialchars($title);
$article=htmlspecialchars($article);

$user_name="ranjahin@localhost";
$pass_word="";
$database="";
$server="104.161.23.12";

$db_handle=mysql_connect($server,$user_name,$pass_word);
$db_found= mysql_select_db($database,$db_handle);

if(db_found){
$title=mysql_real_escape_string($title,db_handle);
$article=mysql_real_escape_string($article,db_handle);

$SQL="SELECT*FROM tb_warticle WHERE Title='$title'";
$result=mysql_query($SQL);

$num_rows=mysql_num_rows($result);

if($num_rows>0){
$errorMsg="title arleady in use change the name or check if article arleady saved";
}
else{
$SQL="INSERT INTO tb_warticle (Title,Article) VALUES('$title','$article')";
$result=mysql_query($SQL);
mysql_close($db_handle);

$errorMsg="Article saved successfully";
}
}
else{
$errorMsg="an error occured please try again later";
}

}


elseif(isset($_REQUEST['submitsa'])){
$fileexist=$_FILES["selectart"]["tmp_name"];

$filename=$_FILES["selectart"]["name"];

$fileType=$_FILES["selectart"]["type"];

$existart=1;

if($fileexist==""){
	$existart==0;
}
else{
if($fileType=="application/pdf" && $_FILES["selectart"]["size"]>0){
		
	
$user_name="";
$pass_word="";
$database="";
$server="";

$db_handle=mysql_connect($server,$user_name,$pass_word);
$db_found= mysql_select_db($database,$db_handle);

if(db_found){
$sarticle=mysqli_real_escape_string(file_get_contents($fileexist));

$SQL="SELECT*FROM tb_sarticle WHERE Article='$filename'";
$result=mysqli_query($SQL);

$num_rows=mysqli_num_rows($result);

if($num_rows>0){
$errorMsg="file already exists, change the name or upload a different file";
}
else{
$SQL="INSERT INTO tb_sarticle (Article) VALUES('$sarticle')";
$result=mysqli_query($SQL);

if($result){
$errorMsg="File successfully saved";
}
else{
	$errorMsg="Error occured, please try again later";
}
}
}
else{
	$errorMsg="Error occured try again later";
}
	}
else{
	$errorMsg="Invalid file, please upload a pdf version";
}
}

	
}
else{
	echo header("Location: http://www.ranjahinvestments.co.ke/editor.html");
}

echo $errorMsg;
}

?>
</body>
</html>
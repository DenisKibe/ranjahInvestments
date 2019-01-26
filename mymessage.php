<html>
<head>
<script type="text/javascript">
function Redirect(){
	window.location="http://www.ranjahinvestments.co.ke/contactus.html"
}
document.write("you will be redirected in 5sec");
setTimeout('Redirect()',5000);
</script>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {

$Email=$_POST['email'];
$Message=$_POST['message'];

$Email=htmlspecialchars($Email);
$Message=htmlspecialchars($Message);


$file_handle=fopen("Admin/Admin/mymessagefile.txt","a");
$file_contents=($Email."=".$Message."<br>");
fwrite($file_handle,$file_contents);
fclose($file_handle);

}
print "Message send successfully, Thank you">


?>
</body>
</html>
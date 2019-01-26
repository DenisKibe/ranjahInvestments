<html>
<head>
<script type="text/javascript">
function Redirect(){
window.location="http://www.ranjahinvestments.co.ke/postimg.php";
}
document.write("You will be redirected in in 5sec."."<br>");
setTimeout('Redirect()',5000);
</script>
</head>
<body>
<?php
if(isset($_REQUEST['submitsa']))
{
	$fileexist1=$_FILES["selectimg1"]["tmp_name"];
	$fileexist2=$_FILES["selectimg2"]["tmp_name"];
	$fileexist3=$_FILES["selectimg3"]["tmp_name"];
	$fileexist4=$_FILES["selectimg4"]["tmp_name"];
	$fileexist5=$_FILES["selectimg5"]["tmp_name"];
	
	if($fileexist1=="" && $fileexist2=="" && $fileexist3=="" && $fileexist4=="" && $fileexist5==""){
		print header("Location: https://www.ranjahinvestments.co.ke/Admin/index.html");
	}
	
	$filename1=$_FILES["selectimg1"]["name"];
	$filename2=$_FILES["selectimg2"]["name"];
	$filename3=$_FILES["selectimg3"]["name"];
	$filename4=$_FILES["selectimg4"]["name"];
	$filename5=$_FILES["selectimg5"]["name"];
	
	$fileType1=$_FILES["selectimg1"]["type"];
	$fileType2=$_FILES["selectimg2"]["type"];
	$fileType3=$_FILES["selectimg3"]["type"];
	$fileType4=$_FILES["selectimg4"]["type"];
	$fileType5=$_FILES["selectimg5"]["type"];
	
	$existimg1=1;
	$existimg2=1;
	$existimg3=1;
	$existimg4=1;
	$existimg5=1;
	
	$fileiko1="uploads/".basename($filename1);
	$fileiko2="uploads/".basename($filename2);
	$fileiko3="uploads/".basename($filename3);
	$fileiko4="uploads/".basename($filename4);
	$fileiko5="uploads/".basename($filename5);
	
	$SuccessMsg="";
	
	
	if($fileexist1 ==""){
		$existimg1=0;
	}
	else{
		if($fileType1=="image/jpg"|| $fileType1=="image/png" || $fileType1=="image/jpeg" && $_FILES["selectimg1"]["size"]>0)
		{
			if(file_exists($fileiko1))
			{
				$ErrorMsg1="Image1 already exist, please rename your image or change it";
			}
	else{
		move_uploaded_file($_FILES["selectimg1"]["tmp_name"],"uploads/$filename1");
			$SuccessMsg="Images successfully saved";
	}
		}
	else{
			$ErrorMsg1="Image1 is invalid format upload jpg/jpeg/png";
		}
	}
	
	if($fileexist2==""){
		$existimg2=0;
	}
	else{
		if($fileType2=="image/jpg"|| $fileType2=="image/png" || $fileType2=="image/jpeg" && $_FILES["selectimg2"]["size"]>0)
		{
			if(file_exists($fileiko2))
			{
				$ErrorMsg2="Image2 already exist, please rename your image or change it";
			}
	else{
		move_uploaded_file($_FILES["selectimg2"]["tmp_name"],"uploads/$filename2");
		$SuccessMsg="Images successfully saved";
	}
		}
	else{
			$ErrorMsg2="Image2 is invalid format upload jpg/jpeg/png";
		}
	}
	
	if($fileexist3==""){
		$existimg3=0;
	}
	else{
		if($fileType3=="image/jpg"|| $fileType3=="image/png" || $fileType3=="image/jpeg" && $_FILES["selectimg3"]["size"]>0)
		{
			if(file_exists($fileiko3))
			{
				$ErrorMsg3="Image3 already exist, please rename your image or change it";
			}
	else{
		move_uploaded_file($_FILES["selectimg3"]["tmp_name"],"uploads/$filename3");
		$SuccessMsg="Images successfully saved";
	}
		}
	else{
			$ErrorMsg3="Image3 is invalid format upload jpg/jpeg/png";
		}
	}
	
	if($fileexist4==""){
		$existimg4=0;
	}
	else{
		if($fileType4=="image/jpg"|| $fileType4=="image/png" || $fileType4=="image/jpeg" && $_FILES["selectimg4"]["size"]>0)
		{
			if(file_exists($fileiko4))
			{
				$ErrorMsg4="Image4 already exist, please rename your image or change it";
			}
	else{
		move_uploaded_file($_FILES["selectimg4"]["tmp_name"],"uploads/$filename4");
		$SuccessMsg="Images successfully saved";
	}
		}
	else{
			$ErrorMsg4="Image4 is invalid format upload jpg/jpeg/png";
		}
	}
	
	if($fileexist5==""){
		$existimg5==0;
	}
	else{
		if($fileType5=="image/jpg"|| $fileType5=="image/png" || $fileType5=="image/jpeg" && $_FILES["selectimg5"]["size"]>0)
		{
			if(file_exists($fileiko5))
			{
				$ErrorMsg5="Image5 already exist, please rename your image or change it";
			}
	else{
		move_uploaded_file($_FILES["selectimg5"]["tmp_name"],"uploads/$filename5");
		$SuccessMsg="Images successfully saved";
	}
		}
	else{
			$ErrorMsg5="Image5 is invalid format upload jpg/jpeg/png";
		}
	}
	
	
	
	echo $ErrorMsg1."<br>";
	echo $ErrorMsg2."<br>";
	echo $ErrorMsg3."<br>";
	echo $ErrorMsg4."<br>";
	echo $ErrorMsg5."<br>";
	
	
	echo $SuccessMsg;
			
		
}
				
?>
</body>
</html>
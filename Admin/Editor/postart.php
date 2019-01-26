<?php
session_start();
if(!(isset($_SESSION['login'])&& $_SESSION['login']!="")){
	header("Location:http://www.ranjahinvestment.co.ke/Admin/index.html");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Ranjah investments-Editor post articles</title>

 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94013900-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-94013900-1');
</script>
    
	</head>
	<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container-fluid">
<!--for the welcome message-->
<p class="pull-right" style="color:white;font-weight:bolder;font-size:large;">Hi Verarita</p>
<!--collection of the nav links-->

<ul class="nav nav-pills">
<li class="active"><a href="postart.php"><span class="glyphicon glyphicon-download-alt"></span></a>
</li>
<li><a href="postimg.php"><span class="glyphicon glyphicon-camera"></span></a>
</li>
<li><a href="openart.php"><span class="glyphicon glyphicon-open"></span></a>
</li>
<li><a href="openimg.php"><span class="glyphicon glyphicon-picture"></span></a>
</li>
<li class="pull-right"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a>
</li>


</ul>
</div>
</nav>

	<div class="container" id="write-art">
		<form method="POST" action="myart.php">
		<label for="articletile">Articles title</label>
			<br>
			<input type="text" name="arttitle" class="form-control" placeholder="write title here" autofocus="autofocus">
			<br>
			<label for="Article">write your article to save</label>
			<br>
				<textarea class="form-control" row="20" cols="25" id="art" placeholder="Write your Article here" autofocus="autofocus" NAME="writeart"></textarea>
			<br>
			<br>
			<button type="submit" class="btn btn-primary btn-large" Name="submitwa">Save</button>
		
		</form>
	</div>
	<br>
	<div class="container" id="select-art">
		<form method="POST" action="myart.php"> 
			<label for="Select-article">Select article from file to save</label>
			<br>
			<span class="input-group-addon">
			<input type="file" name="selectart"></span>
			<br>
			<br>
			<button type="submit" class="btn btn-primary btn-large" Name="submitsa">upload Article</button>
		</form>
	</div>
	
	
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>	
	
	</body>
	</html>
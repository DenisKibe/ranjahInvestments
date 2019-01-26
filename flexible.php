<?php
$mysqli=new mysqli("localhost","root","","test_db");
if($mysqli->connect_errno){
	echo "Failed to connect to mysql:(".$mysqli->connect_errno.")".$mysqli->connect_error;
}
if(!$mysqli->query("DROP TABLE IF EXISTS test")||
	!$mysqli->query("CREATE TABLE test(id INT,label CHAR(1))")||
	!$mysqli->query("INSERT INTO test(id,label)VALUES(1,'a'),(2,'b'),(3,'c')")){
	echo "Table creation failed:(".$mysqli->errno.")".$mysqli->error;
}
if(!($stmt=$mysqli->prepare("SELECT id, label FROM test"))){
	echo"prepare failed:(".$mysqli->errno.")".$mysqli->error;
}
if(!$stmt->execute()){
	echo"Execute failed:(".$stmt->errno.")".$stmt->error;
}
if(!($res=$stmt->get_result())){
	echo"Getting result set failed:(".$stmt->errno.")".$stmt->error;
}
for($row_no=($res->num_rows-1);$row_no>=0;$row_no--){
	$res->data_seek($row_no);
	var_dump($res->fetch_assoc());
}
$res->close();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form action="" method="post">
<table>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("question",$con);

$sql="select max(qid) from q";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$qid=$row["max(qid)"];
$id=$qid+1;
?>
<h2>Question NO:<?php echo $id;?></h2>
<tr><textarea rows="8" cols="60" name="qus"></textarea></tr>
<td><h3>Answer</h3><td>
<tr><th>Opt:1</th><td><input type="text" name="o1" value=""></td></tr>
<tr><th>Opt:2</th><td><input type="text" name="o2" value=""></td></tr>
<tr><th>Opt:3</th><td><input type="text" name="o3" value=""></td></tr></table><table>
<tr><th>correct answer option</th><td><input type="text" name="crct" value=""></td></tr>
<tr><td><input type="submit" name="next" value="Next"></td>
<td><input type="submit" name="save" value="save"></td></tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST["next"]))
{
	$qus=$_POST["qus"];
	$o1=$_POST["o1"];
	$o2=$_POST["o2"];
	$o3=$_POST["o3"];
	
	$sql="insert into q(question) values('$qus')";
	mysql_query($sql);
	$idd=mysql_insert_id();

	
	
	$sql1="insert into answer(answer,qid) values('$o1','$idd')";
	mysql_query($sql1);
	
	$sq2l="insert into answer(answer,qid) values('$o2','$idd')";
	mysql_query($sq2l);
	
	$sql3="insert into answer(answer,qid) values('$o3','$idd')";
	mysql_query($sql3);


	header("location:option.php");
}
if(isset($_POST["save"]))
{
	$qus=$_POST["qus"];
	$o1=$_POST["o1"];
	$o2=$_POST["o2"];
	$o3=$_POST["o3"];
	
	$sql="insert into q(question) values('$qus')";
	mysql_query($sql);
	$idd=mysql_insert_id();
	
	
	$sql1="insert into answer(answer,qid) values('$o1','$idd')";
	mysql_query($sql1);
	
	$sq2l="insert into answer(answer,qid) values('$o2','$idd')";
	mysql_query($sq2l);
	
	$sql3="insert into answer(answer,qid) values('$o3','$idd')";
	mysql_query($sql3);
	header("location:add.php");
}


?>
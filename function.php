<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'hikedb');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}

	public function insertevents($image,$location,$date,$stops,$people,$price)
	{
	$ret=mysqli_query($this->dbh,"insert into events(`image`, `location`, `date`, `stops`, `people`, `price`) values('$image','$location','$date','$stops','$people','$price')");
	return $ret;
	}

public function fetchdataevents()
	{
	$result=mysqli_query($this->dbh,"select * from events");
	return $result;
	}

public function fetchonerecord($id)
	{
	$oneresult=mysqli_query($this->dbh,"select * from tblusers where id=$id");
	return $oneresult;
	}

public function updateevent($id,$image,$location,$date,$stops,$people,$price)
	{
	$updaterecord=mysqli_query($this->dbh,"update  events set image='$image',location='$location',date='$date',stops='$stops',people='$people',price='$price' where id='$id' ");
	return $updaterecord;
	}
	public function updateProduct($id,$image,$name,$price)
	{
	$updaterecord=mysqli_query($this->dbh,"update  products set image='$image',name='$name'price='$price' where id='$id' ");
	return $updaterecord;
	}

public function delete($rid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from events where id=$rid");
	return $deleterecord;
	}
}
?>
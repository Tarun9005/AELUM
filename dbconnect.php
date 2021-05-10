<?php
session_start();

$con=mysqli_connect('localhost','root','','aelum');
//if(!$con){
	//echo "connection unsuccess";

//}

$Name = $_POST['name'];
 $Email = $_POST['email'];
 $DOB = $_POST['dob'];
	
	$About = $_POST['about'];
	
	mysqli_select_db($con,'aelum');


	$q="select * from userdetails where Name='$Name' or Email='$Email' ";

	$resulti=mysqli_query($con, $q);

  $numi=mysqli_num_rows($resulti);
  //var_dump($numi);

  if($numi>0){
	echo "duplicate data";
	//header ('location: signup.php'); 
}
else{
	$qy="insert into userdetails(Name,Email,DOB,About) values('$Name','$Email','$DOB','$About')";
	mysqli_query($con, $qy);
	$_SESSION['nameuser']=$Name;
	header ('location: index.php'); 
}

?>
	
	


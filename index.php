<?php
$insert=false;
if(isset($_POST['name'])){
$username="root";
$server="localhost";
$pass="";
$mydb="trip";
$con=mysqli_connect($server,$username,$pass,$mydb);
if(!$con){
	die("Connection of this database failed due to".mysqli_connect_error());
}
//echo "conected successfully";
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$other=$_POST['other'];
$sql="INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other')";
//echo $sql;
if($con->query($sql)==true){
	//echo "sucesfully insert";
$insert = true; 
}
else
{
echo "ERROR : $sql </br> $con->error";

}
$con->close();
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO TRAVEL FORM</title>
	<link rel="stylesheet"   href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<img class="bg" src="bg.jpg" alt="IIT">
<div class="container">
<h2>Welcome To IIT Delhi Trip</h2>
<p>Enter Your All Details In Form  </p>
<?php if($insert == true) 

	echo "<p class='submitMsg'>Thanks for submiting your form . We are happy to joining us for the US trip</p>"
 
 ?>
<form action="index.php" method="POST">
	<input type="text" name="name" id="name" placeholder="Enter Your Name">
	<input type="text" name="age" id="age" placeholder="Enter Your Age">
	<input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
	<input type="email" name="email" id="email" placeholder="Enter Your Email">
	<input type="phone" name="phone"  id="phone" placeholder="Enter Your Phone">
	<textarea type="desc" name="other" id="other" col="25" row="40" placeholder="Enter any other Info" ></textarea>
	<button class="btn">Submit</button>
	 

</form>
</div>
<script src="index.js"></script>
</body>
</html>
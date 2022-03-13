<?php 
$name=$_POST["username"];
$number=$_POST["number"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$password=$_POST["password"];


$connect = mysqli_connect("localhost","root","","userform") or die(mysqli_error($connect));
$insertQuery="INSERT INTO user(u_name,u_number,u_dob,u_email,u_password) VALUES
('$name',$number,'$dob','$email','$password')";
$runQuery=mysqli_query($connect,$insertQuery) or die(mysqli_error($connect));

header("location:http://localhost:3000/user.php");

mysqli_close($connect);
    ?>
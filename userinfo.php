<?php 

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection succesful!";
}else{
	echo "Not successful";
}

mysqli_select_db($con, 'userentries');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['Mobile'];
$comments = $_POST['comments'];

$query = "INSERT INTO userinfodtata(user, email, mobile, comment) VALUES ('$user','$email','$mobile','$comments')";

echo "$query";

mysqli_query($con,$query);
header('location:index.php');

?>
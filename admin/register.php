<?php 
include 'functions.php';
$phone = "08114800769";
$email = "ituaosemeilu234@gmail.com";
$password = "cholesterol";

$phone = @mysqli_real_escape_string($conn,$phone);
$email = @mysqli_real_escape_string($conn,$email);
$password = @mysqli_real_escape_string($conn,$password);
$password = password_encryption($password);

$query = "INSERT INTO admin (user_id, email, password, phone) VALUES (NULL,'$email','$password','$phone')";
$result = @mysqli_query($conn,$query);
if($result){
    echo "info added";
    echo "<br>";
    echo $password;
}else{
    echo "somethings wrong";
}
?>
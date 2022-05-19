<?php 
$errors = array();
$data = array();
// connect to database
include 'functions.php';
//validate and sanitize user input
$email = @mysqli_real_escape_string($conn, $_POST['email']);
$pass1 = @mysqli_real_escape_string($conn, $_POST['password']);
$pass2 = @mysqli_real_escape_string($conn, $_POST['confirm-password']);
//ensure that the form is correctly filled ...
function test_input($data){
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
switch(true){
    case(!empty($pass1)):
        if(strlen($pass1) >= '8'){
            $pass1 = test_input($pass1);
            if(preg_match("/^[a-zA-Z]*$/", $pass1)){
               array_push($errors,"Password Must Contain At Least One Number");
            }
            if(!preg_match("#[A-Z]+#", $pass1)){
                array_push($errors,"Password Must Contain At Least One Capital Letter");
            }
            if(!preg_match("#[a-z]+#", $pass1)){
                array_push($errors,"Password Must Contain At Least One Small Letter");
            }
        }else{
            array_push($errors,"Password Must Contain At Least 8 Characters!");
        }
    break;
    default:
        array_push($errors,"This field is required");
}
$pass1 = password_encryption($pass1);
if(count($errors) == 0){
    $sql = "SELECT user_id FROM admin WHERE email='$email' LIMIT 1";
    $query = @mysqli_query($conn,$sql);
    if($query){
        $row = @mysqli_num_rows($query);
        if($row == 1){
            $arr = @mysqli_fetch_array($query);
            $user_id = $arr['user_id'];
            $sql = "UPDATE admin SET password='$pass1' WHERE user_id='$user_id' ";
            $query = @mysqli_query($conn,$sql);
            if($query){
                $sql = "DELETE FROM passwordreset WHERE email='$email'";
                $query = @mysqli_query($conn,$sql);
            }
        }
    }
}
?>
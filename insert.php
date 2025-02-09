<!-- TO CREATE A PHP FILE TO INSERT DATA -->


<?php 
include 'config.php';

if(isset($_POST['signup'])){
    $firstName = $_POST['Firstname'];
    $lastName = $_POST['Lastname'];
    $birthday = $_POST['Birthday'];
    $gender = $_POST['Gender'];
    $number = $_POST['Number'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    // $password=md5($password); TO ENCRYPT


     $checkEmail = "SELECT * From user_db where email ='$email'";
     $result = $conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $sql = "INSERT INTO user_db(firstName,lastName,birthday,gender,number,email,password)
                       VALUES ('$firstName','$lastName','$birthday','$gender','$number','$email','$password')";
            if($conn->query($sql)==TRUE){
                header("location: Login.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

//login

if(isset($_POST['login'])){
   $email = $_POST['Email'];
   $password = $_POST['Password'];
   //$password=md5($password) ;
   
   $sql = "SELECT * FROM user_db WHERE email='$email' and password='$password'";
   $result = $conn->query($sql);
        if($result->num_rows>0){
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['email']=$row['email'];
            header("Location: home.php");
            exit();
        }
        else{
            echo "Not Found, Incorrect Email or Password".$conn->error;
        }

}


 /*
if(isset($_POST['newPassword'])){
    $email =  $_POST['Email'];
    $newPassword = $_POST['New password'];
    $confirmPassword = $_POST['Confirm password'];
    //$password=md5($password) ;

    
    $sql = "SELECT * From user_db where email ='$email'";
     $result = $conn->query($sql);

     if($conn->query($sql)){
        if ($newPassword == $confirmPassword) {
            $sql = "UPDATE user_db SET password='$newPassword'";
            $row=$result->fetch_assoc();
            $_SESSION['email']=$row['email'];
            header("Location: login.php");
        }else {
        echo "Email Address Already Exists !";
        }
     }
     else{
        echo "Error:".$conn->error;
        
     }
} */

?>
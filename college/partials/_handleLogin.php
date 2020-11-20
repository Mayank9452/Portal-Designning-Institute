<?php

$showerror="false";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email=$_POST['loginEmail'];
    $pass=$_POST['loginPassword'];

    $sql="select * from `users` where user_email='$email'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
        $row=mysqli_fetch_assoc($result);
            if(password_verify($pass,$row['user_pass'])){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['sno']=$row['sno'];
                $_SESSION['useremail']=$email;
                header("Location:/Portal-Designning-Institute/college/college.php");
                exit();
            }
          
                header("Location: /Portal-Designning-Institute/college/college.php");
            }
            header("Location: /Portal-Designning-Institute/college/college.php");
        }
    
?>
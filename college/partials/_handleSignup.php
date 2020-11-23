<?php

$showerror="false";


if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $user_email=$_POST['signupEmail'];
    $user_username=$_POST['signupUsername'];
    $pass=$_POST['signupPassword'];
    $cpass=$_POST['signupcPassword'];

    //check wheter this email exists

    $existSql="select * from `users` where user_email='$user_email'";
    $result=mysqli_query($conn,$existSql);
    $numrows=mysqli_num_rows($result);

    $existSql1="select * from `users` where user_username='$user_username'";
    $result1=mysqli_query($conn,$existSql1);
    $numrows1=mysqli_num_rows($result1);
    if($numrows>0){
        $showerror="email alredy exist";
    }
    else if($numrows1>0){
        $showerror="username alredy exist";
    }
    else {
        if($pass==$cpass){
        $hash=password_hash($pass,PASSWORD_DEFAULT);
        $sql="INSERT INTO `users` ( `user_email`,`user_username`, `user_pass`, `timestamp`) VALUES ('$user_email','$user_username', '$hash', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result){
            $showalert=true;
            header("Location: /Portal-Designning-Institute/college/college.php?signupsuccess=true");
            exit();
        }
    }
    else{
        $showerror="password do not match";
        echo '$showerror';
        
    }
}

 header("Location: /Portal-Designning-Institute/college/college.php?signupsuccess=false & error=$showerror");
 
}
?>
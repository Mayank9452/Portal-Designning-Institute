<?php

$showerror="false";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $user_email=$_POST['signupEmail'];
    $pass=$_POST['signupPassword'];
    $cpass=$_POST['signupcPassword'];

    //check wheter this email exists

    $existSql="select * from `users` where user_email='$user_email'";
    $result=mysqli_query($conn,$existSql);
    $numrows=mysqli_num_rows($result);
    if($numrows>0){
        $showerror="email alredy exist";
    }
    else {
        if($pass==$cpass){
        $hash=password_hash($pass,PASSWORD_DEFAULT);
        $sql="INSERT INTO `users` ( `user_email`, `user_pass`, `timestamp`) VALUES ('$user_email', '$hash', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result){
            $showalert=true;
            header("Location: /Portal-Designning-Institute/college/college.php?signupsuccess=true");
            exit();
        }
    }
    else{
        $showerror="password do not match";
        
    }
}

 header("Location: /Portal-Designning-Institute/college/college.php?signupsuccess=false & error=$showerror");

}
?>
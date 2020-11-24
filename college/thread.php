<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>

    <?php
    $id=$_GET['threadid'];
    $sql="SELECT * FROM `threads` WHERE thread_id=$id";
    $result=mysqli_query($conn,$sql);
    $noresult=true;
    while($row=mysqli_fetch_assoc($result)){
      $title=$row['thread_title'];
      $desc=$row['thread_desc'];
      $thread_user_id=$row['thread_user_id'];
      $noresult=false;

      $sql2= "SELECT user_username FROM `users` WHERE sno='$thread_user_id'";
              $result2=mysqli_query($conn,$sql2);
              $row2=mysqli_fetch_assoc($result2);
              $posted_by=$row2['user_username'];

    }
    if($noresult){
      echo '<div class="jumbotron jumbotron-fluid">
      <div class="container">
        <p class="">No results found</h1>
        <p class="lead">Be the first person to ask.</p>
      </div>
    </div>';
    }
    ?>

<?php 
    $method= $_SERVER['REQUEST_METHOD'];
    $showalert=false;
    if($method=='POST'){
      //insert into comment db
     $comment=$_POST['comment'];
     $sno=$_POST['sno'];
      $sql="INSERT INTO `comment` (`thread_id`, `comment_content`, `comment_time`, `comment_by`) VALUES ('$id', '$comment', current_timestamp(), '$sno')";
      $result=mysqli_query($conn,$sql);
      $showalert=true;
      if($showalert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your comment has been added.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
    }
    ?>


    <div class="container my-4">
        <div class="jumbotron" style="background-image: url(../college/clgimg/qna1.jpg);background-position: center;background-size: cover;opacity: .9;">
            <h1 class="display-4" style="color:white"> <?php echo $title; ?></h1>
            <p class="lead" style="color:white"><?php echo $desc; ?></p>
            <hr class="my-4">
            
                <p style="color:white">Posted by: <em><?php echo $posted_by;?></em></p>
        </div>
    </div>


    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '<div class="container">
    <h1 class="py-2">Know something about it ? Drop a comment then !</h1>

    <form action="'. $_SERVER['REQUEST_URI'] .'"  method="POST">
          
          <div class="form-group">
            <label for="exampleInputPassword1">Type your comment.</label>
            <textarea type="text" class="form-control" id="comment" name="comment" rows="3"></textarea>
            <input type="hidden" name="sno" value="'. $_SESSION['sno']. '">
            </div>
          <button type="submit" class="btn btn-success">Post a comment</button>
    </form>
    </div>';
    }
    else{
      echo '<div class="container">
      <h1 class="py-2">Post a comment</h1>
      <p class="lead" style="color:red">You are not logged in. please logged in to post comment</p>
    </div>';

    }
    ?>

    <div class="container">  
    <?php
            $id=$_GET['threadid'];
            $sql="SELECT * FROM `comment` WHERE thread_id=$id";
            $result=mysqli_query($conn,$sql);
            $noresult=true;
            while($row=mysqli_fetch_assoc($result)){
              $noresult=false;
              $id=$row['comment_id'];
              $content=$row['comment_content'];
              $comment_time=$row['comment_time'];
              $thread_user_id=$row['comment_by'];

              $sql2= "SELECT user_username FROM `users` WHERE sno='$thread_user_id'";
              $result2=mysqli_query($conn,$sql2);
              $row2=mysqli_fetch_assoc($result2);

        echo '<div class="media my-3">
        <img src="./clgimg/man.png" class="mr-3" alt="discuss" style="width:50px">
                      <div class="media-body">
                      <p class="font-weight-bold my-0">'.$row2['user_username'].' </p>
                         " '. $content .' "
                          
                      </div>
              </div>';
            }
            if($noresult){
              echo '<div class="jumbotron jumbotron-fluid">
              <div class="container">
                <p class="">No comments found</h1>
                <p class="lead">Be the first person to comment.</p>
              </div>
            </div>';
            }
          ?>
 
</div>

    <?php include 'partials/_footer.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
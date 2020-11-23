<?php
 $con= mysqli_connect('localhost','root','','college_db2');
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    
    <title>College</title>

  </head>
<body>
  
      
  <?php include 'partials/_header.php'; ?>

  <main>

    <div class="container">
    <div class="row" id="btn_compare" style="display:none;">
      <div class="col-sm-12" style="margin-top: 50px;">
        <form action="compare.php" method="post">
             <input type="hidden" value="" id="card_one" name="card_one"/>
             <input type="hidden" value="" id="card_two" name="card_two"/>
             
             <input type="submit" value="Compare College" class="btn btn-success" style="float:right;"/>
         </form>
      </div>  
    </div>

    
    <div class="row" style="margin-top: 50px;">
            <?php
            $sql = "select * from college_data";
            $query = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($query))
            {
              $id=$row['id']; 
          ?>
         
         <div class="col-sm-12 col-md-6 col-lg-4" style="margin-bottom: 30px; padding: 15px;">
        <div class="card compare_card<?php echo $row['id']; ?>">
        <img src="./clgimg/<?php echo $row['id']; ?>.jpg" height="200" width="100%">
          <h5 style="font-weight: bold;text-align: center;"><?php echo $row['name']; ?></h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">LOCATION: <?php echo $row['location']; ?></li>
            <li class="list-group-item">FEES: <?php echo $row['Fee_Structure']; ?></li>
            <li class="list-group-item">Ratings: <?php echo $row['Ratings']; ?>/5</li>
          

          </ul>
          <div class="button_style" style="justify-content: space-between;display:flex">
          <button style=" border: 1px solid #ff7900;color: #ff7900; background-color: white; width:50%;" class="compare" rel="<?php echo $row['id']; ?>">Compare</button>
          <button style=" color: white;background-color: #ff7900; width:50%;border: none;">know more</button>
          </div>
          <a href="threadlist.php?catid=<?php echo $row['id']; ?>" class="btn btn-primary">View Threads</a>
        
        </div>
      </div>	
      
      <?php 
        } 
      ?>
  </div>

  </main>

  <footer>
    
<!--footer-->
<footer class="page-footer bg-dark">
        <div class="bg bg-success">
            <div class="container">
                <div class="row py-3 d-flex align-items-center">
                    <div class="col-md-12 text-center">
                        <a href="#"><i class="fab fa-facebook text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-twitter-square text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-google-plus-square text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-linkedin text-white "></i></a>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="container text-center text-md-left mt-5">
            <div class="row">

                <div class="logo col-md-3 mx-auto mb-4">
                    <img class="mt-5"  src="./image/logo.png" alt="logo">
                </div>

    

            <div class="col-md-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Career</h6>
                <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 74px; height: 2px;">
                
                <ul class="list-unstyled">
                 <li class="my-2"><a href="#">Engineering</a></li>
                 <li class="my-2"><a href="#">Commerece</a></li>
                 <li class="my-2"><a href="#">Medical</a></li>
                 <li class="my-2"><a href="#">Management</a></li>
                 <li class="my-2"><a href="#">Laws</a></li>
                
                </ul>
            </div>


            <div class="col-md-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Useful Links</h6>
                <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 130px; height: 2px;">
                <ul class="list-unstyled">
                    <li class="my-2"><a href="#">CompareCollege</a></li>
                    <li class="my-2"><a href="#">Visit College</a></li>
                    <li class="my-2"><a href="#">About Us</a></li>
                    <li class="my-2"><a href="#">lorem</a></li>
                    <li class="my-2"><a href="#">lorem</a></li>
                   
                   </ul>
               </div>

            <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
                <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 120px; height: 2px;">
                <ul class="list-unstyled">
                   <li class="my-2"><i class="fas fa-home mr-3"></i>Jr-139 Hindalco,Renukoot UP</li>
                   <li class="my-2"><i class="fas fa-envelope-square mr-3"></i>abc123@gmail.com</li>
                   <li class="my-2"><i class="fas fa-phone-square mr-3"></i>+9176826587</li>
                   <li class="my-2"><i class="fas fa-print mr-3"></i>+0087364857</li>
                   </ul>
               </div>

            </div>
        </div>
        
        <div class="footer-copyright text-center py-3">
            <p>&copy; footer-copyright
                <a href="#">collegechoice.com</a>
            </p>
        </div>

    </footer>
    <!--end of footer-->


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
  <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
            } );
    </script>

  <script type="text/javascript">
    $(document).ready(function(){
         $(document).on('click','.compare',function(){
          var id = $(this).attr('rel');
          var size_class = $('.card_check').length;
          if(size_class > 1)
          {
              if($(".compare_card"+id).hasClass("card_check"))
              {
                  
                  $(".compare_card"+id).removeClass("card_check");
                  
              }
              else
              {
                  alert("You have already select maximum product");
              }
             
          }
          else
          {
              if(size_class>0)
              {
                   $('#btn_compare').show();
              }
              
              if($(".compare_card"+id).hasClass("card_check"))
              {
                  $(".compare_card"+id).removeClass("card_check");
              }
              else
              {
                  $(".compare_card"+id).addClass("card_check");
                  
                  var pro1 = $('#card_one').val();
                  var pro2 = $('#card_two').val();
                  
                  if(pro1=="")
                  {
                      $('#card_one').val(id);
                  }
                  else if(pro2=="")
                  {
                      $('#card_two').val(id);
                  }
                  
              }
          }
           
         }); 

     });
  </script>

</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','college_db');

$collegeOne =$collegeTwo ='';

$collegeOne=$_REQUEST['card_one'];
$collegeTwo=$_REQUEST['card_two'];

$col1_sql="select * from college_data where id='".$collegeOne."'";
$col1_query=mysqli_query($con,$col1_sql);
$col1=mysqli_fetch_object($col1_query);

$col2_sql="select * from college_data where id='".$collegeTwo."'";
$col2_query=mysqli_query($con,$col2_sql);
$col2=mysqli_fetch_object($col2_query);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Compare college</title>

  
  </head>
  <body>
      <header>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-sm-9" style="margin-top: 30px;">
                    <h2 style="text-align: center;">Compare College List</h2>
                </div>
                <div class="col-sm-1" style="margin-top: 30px;">
                   <a href="./college.php">Back</a>
                </div>
               	
            </div>
        </div>
  
      </header>

      <main>
          <div class="container">
            <div class="row" style="margin-top: 50px;">
                <div class="col-sm-2" style="margin-bottom: 30px; padding: 5px; margin-top:198px;">
                    
                        <p>Name<p>
                        <p>Location</p>
                        <p>Fee Structure</p>
                        <p>Ratings</p>
                        <p>Eligibility</p>
                        <p>Average Package</p>  
                        <p>Accrediation and Approval</p>
                        <p>Facilities</p>   
                    
                </div>
                <div class="col-sm-5" style="margin-bottom: 30px; padding: 5px;">
                    <div class="card">
                        
                        <img src="<?php echo $col1->image; ?>" height="200" width="100%">
                        <p style="font-weight:700"><?php echo $col1->name; ?></p>
                        <p><?php echo $col1->location; ?></p>
                        <p><?php echo $col1->Fee_Structure; ?></p>
                        <p><?php echo $col1->Ratings; ?></p>
                        <p><?php echo $col1->Eligibility; ?></p>
                        <p><?php echo $col1->Average_Package; ?></p>
                        <p><?php echo $col1->Accrediation_and_Approval; ?></p>
                        <br>
                        <p><?php echo $col1->facilities; ?></p>
                        
                       
                    </div>
                </div>
                <div class="col-sm-5" style="margin-bottom: 30px; padding: 5px;">
                    <div class="card">
                        
                        <img src="<?php echo $col2->image; ?>" height="200" width="100%">
                        <p style="font-weight:700"><?php echo $col2->name; ?></p>
                        <p><?php echo $col2->location; ?></p>
                        <p><?php echo $col2->Fee_Structure; ?></p>
                        <p><?php echo $col2->Ratings; ?></p>
                        <p><?php echo $col2->Eligibility; ?></p>
                        <p><?php echo $col2->Average_Package; ?></p>
                        <p><?php echo $col2->Accrediation_and_Approval; ?></p>
                        <br>
                        <p><?php echo $col2->facilities; ?></p>
                        
                    </div>
                </div>	
          </div>
        </div>
          
      </main>

      

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  </body>
  </html>

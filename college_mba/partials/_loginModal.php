<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">


<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleloginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #def0f3; font-family: 'Poppins', sans-serif;">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel" style="text-align: center;">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/Portal-Designning-Institute/college_mba/partials/_handleLogin.php" method="POST">
      <div class="modal-body">
              
            <div class="form-group">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="loginEmail" name="loginUsername" aria-describedby="emailHelp" placeholder="Enter Username" required>
                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <div class="form-group">
            <i class="fa fa-lock" aria-hidden="true"></i>
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter Password" requird>
            </div>
            
            <button type="submit" class="btn btn-primary" style="width:100% ; margin:0">Login</button>
            
      </div>
      </form>

    </div>
  </div>
</div>
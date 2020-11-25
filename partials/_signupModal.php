
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="examplesignupLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #def0f3; font-family: 'Poppins', sans-serif;">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/Portal-Designning-Institute/college/partials/_handleSignup.php" method="POST">
      <div class="modal-body">
              
            <div class="form-group">
            <i class="fa fa-envelope" aria-hidden="true"></i>
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp" placeholder="Enter Email" required>
                
            </div>
            <div class="form-group">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="signupUsername" name="signupUsername" aria-describedby="emailHelp" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
            <i class="fa fa-lock" aria-hidden="true"></i>
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
            <i class="fa fa-lock" aria-hidden="true"></i>
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="signupcPassword" name="signupcPassword" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100% ; margin:0">Sign Up</button>
            
      </div>

      </form>


    </div>
  </div>
</div>
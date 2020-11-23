
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="examplesignupLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign up for College Choice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/Portal-Designning-Institute/college/partials/_handleSignup.php" method="POST">
      <div class="modal-body">
              
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <!--<input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                <input type="text" class="form-control" id="signupUsername" name="signupUsername" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="signupPassword" name="signupPassword">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="signupcPassword" name="signupcPassword">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>


    </div>
  </div>
</div>
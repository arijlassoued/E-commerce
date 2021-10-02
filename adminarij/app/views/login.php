<!DOCTYPE html>
<html lang="en">
<?php include "includes/top.php";?>
  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
        <form id="admin-login-form"  action= "<?php echo URLROOT ?>/users/login"  method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="mdp" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary login-btn">Submit</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo URLROOT ?>/users/register"  method="POST">Register an Account</a>
            <a class="d-block small" href="http://localhost/adminarij/users/forgot_passwword">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

   

	<?php include "includes/footer.php";?>
  </body>

</html>

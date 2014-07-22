<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
	<link href="<?=base_url('../../../assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?=base_url('../../../assets/css/cmpe295B.css')?>" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" action="login" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <!--<input type="checkbox" value="remember-me"> Remember me-->
          </label>
        </div>
        <?php if ($success == false){?>
    		<div class='alert alert-warning fade in' role='alert'> <?php echo $error_message; ?> </div>
    	<?php }?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <i class="glyphicon glyphicon-hand-right"></i> <a href="sign_up"> Sign Up </a>
      </form>
     

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

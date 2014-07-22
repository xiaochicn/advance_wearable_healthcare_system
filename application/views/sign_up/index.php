<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
	<link href="<?=base_url('../../../assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?=base_url('../../../assets/css/cmpe295B.css')?>" rel="stylesheet">
	<script src="<?=base_url('../../../assets/js/jquery.js')?>"></script>
	<script src="<?=base_url('../../../assets/js/jquery.validate.js')?>"></script>
	
	<!-- inline script -->
	<script>

	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				first_name: "required",
				last_name: "required",
				age: "required",
				location: "required",
				password: {
					required: true,
					minlength: 6
				},
				confirm_password: {
					required: true,
					minlength: 6,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
			}
		});

	});
	</script>
	<style>
	#signupForm label.error {
		margin-left: 10px;
		width: auto;
		color: red;
		display: inline;
	}
	</style>
	
  </head>

  <body>

    <div class="container col-md-offset-3">

      <form id="signupForm" class="form-horizontal" role="form" action="create_new_user" method="post">
        <div class="form-group">
        	
        	<label class="col-sm-2 control-label"> <h2 class="form-signin-heading">Sign Up</h2></label>
        	<div class="col-sm-4">
        		
        	</div>
        </div>
        <div class="form-group">
        	<label class="col-sm-2 control-label"> First Name: </label>
        	<div class="col-sm-4">
        		<input class="form-control" id="first_name" name="first_name" placeholder="Enter frist name" >
        	</div>
        </div>
         <div class="form-group">
        	<label class="col-sm-2 control-label"> Last Name: </label>
        	<div class="col-sm-4">
        		<input class="form-control" id="last_name" name="last_name" placeholder="Enter last name" >
        	</div>
        </div>
        <div class="form-group">
        	<label class="col-sm-2 control-label"> Age: </label>
        	<div class="col-sm-4">
        		<input class="form-control" id="age" name="age" placeholder="Enter age" >
        	</div>
        </div>
        <div class="form-group">
        	<label class="col-sm-2 control-label"> Home Address: </label>
        	<div class="col-sm-4">
        		<input class="form-control" id="location" name="location" placeholder="Enter Home Address" >
        	</div>
        </div>
        <div class="form-group">
        	<label class="col-sm-2 control-label"> Email Address: </label>
        	<div class="col-sm-4">
        		<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" >
        	</div>
        </div>
         <div class="form-group">
        	<label class="col-sm-2 control-label"> Password: </label>
        	<div class="col-sm-4">
        		<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" >
        	</div>
        </div>
        <div class="form-group">
        	<label class="col-sm-2 control-label"> Confirm Password: </label>
        	<div class="col-sm-4">
        		<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter confirm password" >
        	</div>
        </div>
        <div class="form-group">
        	<label class="col-sm-2 control-label"> </label>
        	<div class="col-sm-4">
        		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
        	</div>
        </div>
        <div class="form-group">
        	<label class="col-sm-2 control-label"> </label>
        	<div class="col-sm-4">
        		 <i class="glyphicon glyphicon-hand-right"></i> <a href="index"> Go Back to Login</a>
        	</div>
        </div>
      </form>
     

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

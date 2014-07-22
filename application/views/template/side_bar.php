    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Advanced Wearable Healthcare System</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Chi</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li <?php if($user_id == 'dashboard'){ echo "class='active'";} ?>><a href="dashboard">All Users' Overview</a></li>
			<?php foreach($users as $u){?>
            <li <?php if($user_id == $u['id']){ echo "class='active'";} ?>><a href="get_user?uid=<?php echo $u['id']; ?>"><?php echo $u['first_name']; ?> <?php echo $u['last_name']; ?></a></li>
			<?php } ?>
          </ul>
        </div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
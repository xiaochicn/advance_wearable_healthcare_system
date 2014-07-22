
          <h1 class="page-header">All Dashboard</h1>

          <div class="row placeholders">
		  <?php foreach($users as $u){?>		
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="http://placehold.it/200x200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><a href="get_user?uid=<?php echo $u['id']; ?>"><?php echo $u['first_name']; ?> <?php echo $u['last_name']; ?></a></li></h4>
            </div>
			<?php } ?>
          </div>

          <h2 class="sub-header">All Reccommendations</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Health Condition</th>
                  <th>Location</th>
                  <th>Recommended Sport</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Chi Zhang</td>
                  <td>Good</td>
                  <td>Basketball</td>
                  <td><a href="#">Map it</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jim Chou</td>
                  <td>Good</td>
                  <td>baseball</td>
                  <td><a href="#">Map it</a></td>
                </tr>
              </tbody>
            </table>
          </div>

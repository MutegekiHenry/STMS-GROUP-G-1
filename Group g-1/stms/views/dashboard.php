<nav class="nav">
  <div class="container">
	   <ul>

        <li><a class="navbar-brand" href="index.php?page=home.php"><img src="resources/logo.png" id="logo"></a>
        </li>
	      
        <li><a href="index.php?page=home.php">HOME</a></li>


<?php if(isset($_SESSION['username'])) { ?>

			<li class="dropdown">
		          <a class="dropbtn" href="#">STATISTICS</a>
		          <div  class="dropdown-content">
		          	<a href="index.php?page=success_rate.php">Success Rate</a><br/>
		            <a href="index.php?page=failure_rate.php">Failure Rate</a><br/>
		            <a href="index.php?page=average_rate.php">Average processing Rate</a>
		          </div>
        	</li> 

	        <li class="dropdown">
		          <a  class="dropbtn" href="#">JOBS</a>
		          <div class="dropdown-content">
		          	<a href="index.php?page=ready_jobs.php">Ready Jobs</a><br/>
		            <a href="index.php?page=waiting_jobs.php">Waiting Jobs</a><br/>
		            <a href="index.php?page=with_priority.php">Waiting With Priority</a><br/>
								<a href="index.php?page=blacklisted_jobs.php">Blacklisted jobs</a>
		          </div>
        	</li> 

			<li class="dropdown">
        <a href="#">REGISTERATION</a>
              <div class="dropdown-content">
                <a href="index.php?page=registered_users.php">Registered Students</a><br/>
                <a href="index.php?page=register.php">Register new student</a>
              </div>
      </li>

<?php } ?>

<?php if(isset($_SESSION['username'])) { ?>
			 	<!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
		<li id="logout" class="dropdown">

				 			  <a href="index.php?page=logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>

		</li>

<?php } else { ?>
			<li><a href="index.php?page=login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul> 

<?php }?>
	</div>

  </nav>

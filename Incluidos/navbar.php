 <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" style="color:#fff" href="index.php">TinyBiz</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>    	  
			  <li><a href="#myModal" data-toggle="modal">Log In</a></li>
            </ul>
         	   <?php include 'TinyBiz/Core/functions/search.php'; ?>
				<form class="navbar-form pull-right" method="POST" action="search.php">
            	  <input value = "<?php echo $_POST['Search']; ?>" name = "Search" class="search-query" type="Search" placeholder="Search..." id="searchBox">
				</form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container" id="frontContainer">
	
		<!--Login Modal-->
		<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">My Account</h3>
			</div>
			<div class="modal-body">
				<div class="hero-unit">
					<input id="user_usernameText" type="text" name="userName" style="width:70%; margin-left:10%" placeholder="User Name"/>
					<input id="user_passwordText" type="text" name="password" style="width:70%; margin-left:10%; margin-top:5%" placeholder="Password"/>

					<input class="btn btn-small btn-info" type="submit" name="commit" id="logInButton" value="Log In" style="margin-left:10%; margin-top:5%"
					data-dismiss="modal" aria-hidden="true"/>
					
					<a href="registration.php" onclick = document.form.submit();><input class="btn btn-small btn-warning pull-right" type="submit" name="sign" id="signUpButton" value="Sign Up" 
					style="margin-right:17%; margin-top:5%"   href="registration.php"  aria-hidden="true"/></a>
				</div>				
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>						
			</div>
		</div><!--end modal-->
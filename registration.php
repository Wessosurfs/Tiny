<?php include 'TinyBiz/incluidos/final/head.php'; ?>

    <div class="container">		
		
		<div class="row"><!-- title -->
			<div class="span12">
			  <h1>Registration</h1>
			</div>
		</div>
		
		<hr>
		
		<div class ="row-fluid">
			<div class = "span3"></div>
		
			<div class = "span7">
				<form class="form">			  
					<input type="text" id="inputName" placeholder="Name...">
					<br />
					<br />
					<font class="form-inline">  
						<input type="password" id="inputPassword" placeholder="Password...">
						<label style=""><i> Minimum 8 character and 1#</i></label>
					</font>
					<br />
					<br />
					<input type="password" id="inputPassword" placeholder="Retype Password...">
					<br />
					<br />
					<font class ="form-inline">
						<input type="email" id="inputEmail" placeholder="Email...">
						<label spellcheck=""><i>Must be a valid email</i></label>
					</font>
					<br />
					<br />
					<div class="btn-group" style="">
						<button class="btn btn-large" style = "margin-left:5px">Select A Question...</button>
						<button class="btn btn-large dropdown-toggle"  data-toggle="dropdown">
						<span class="caret"></span>
						</button> 
						<ul class="dropdown-menu">
							<li><a><i>What town do you live in?</i></a></li>
							<li><a><i>When did you open your store?</i></a></li>
							<li><a><i>What school Di you went to?</i></a></li>
						</ul>
					</div>		
					<br />
					<br />
					<font class ="form-inline">
						<input type="email" id="inputAnswer" placeholder="Answer...">
						<label spellcheck=""><i>Must be a valid email</i></label>
					</font>				
				</form>
			</div><!-- ends span8 -->
			<div class="span2"></div>
		</div>
		

		<div class ="row">
			<div class="span3"></div>
			<div class = "span3">  
				<a href="create-store.php" class ="btn btn-info btn-large">Register</a></li>
			</div>
			<div class="span6"></div>
		</div>		
		
<?php include 'TinyBiz/incluidos/footer.php'; ?>

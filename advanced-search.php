<?php include 'TinyBiz/incluidos/final/head.php'; ?>

    <div class="container">	
	
		<div class="row">
			<div class="span12">
				<h1>Advanced Search</h1>
			</div>
		</div>
		<hr>
	
		<div class="row" style="margin-top:50px; margin-bottom:100px;">
			<div class="span4 offset2" style="text-align:center;">
				<h3>&nbsp;</h3>				
				<form  method="POST" action="advanced-search.php">
					<input name = "name" class="input-large" type="text" placeholder="Store Name">
					<input name = "region" class="input-large" type="text" placeholder="Region"><br />
					<input name = "town" class="input-large" type="text" placeholder="Town"><br />				
					<input name = "zipcode" class="input-large" type="text" placeholder="ZipCode"><br />
					<input name = "owner" class="input-large" type="text" placeholder="Owner"><br />
					<input class="btn btn-large  btn-info" type="Submit" name="Submit" id="CommentButton" value="Submit" style="margin-left:10%; margin-top:5%"/>
			    </form>	
			</div>
			<div class="span4">
				<h3>Tips</h3>
				<p>If you couldn't find the store you were looking for, here you can refine your search.</p><p>Some useful hints:</p>
				<ul style="list-style-type: disc">
					<li>The more fields you fill, the more specific your search will be.</li>		
					<li>Use the first name of the business you are looking for.</li>		
					<li>Regions are: West, North, East, West.</li>		
				</ul>
				<br />
			</div>		
		</div>

<?php include 'TinyBiz/core/database/Query/advancesearchq.php'; ?>
  <?php include 'TinyBiz/incluidos/footer.php'; ?>


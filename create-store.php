<?php include 'TinyBiz/incluidos/final/head.php'; ?>

    <div class="container span12">
		
		<div class="row"><!-- title -->
			<div class="span12">
			  <h1>Build Your Store</h1>
			</div>
		</div>
		
		<hr>
		<div class="row">
			<div class="span2"></div>
			
			<div class="span4">
				<h3>General Information</h3>
				<form>
					<input type="text" class="input-xlarge" placeholder="Owner Name"/>
					<input type="text" class="input-xlarge" placeholder="Store Name"/>
					<input type="text" class="input-xlarge" placeholder="Phone"/>
					<input type="text" class="input-xlarge" placeholder="Town"/>
					<input type="text" class="input-xlarge" placeholder="Address"/>
					<input type="text" class="input-xlarge" placeholder="Store Category"/>
					
					<textarea rows="4" class="input-xlarge" placeholder="Describe your store..." style=""></textarea>
					
					<button type="submit" class="btn btn-large btn-info">Submit</button>
				</form>			
				
			</div><!-- ends span3 -->
			
			<div class="span4">		
				<h3>Photo</h3>
				<ul class="thumbnails">						
					<li class="span3">
						<a href="#" class="thumbnail">
							<img src="http://placehold.it/300x150" alt=""/>
						</a>
					</li>					
				</ul>
				<form action="./upload.php" method="post" enctype="multipart/form-data">
					<p>
						<label for="file">Select file:</label> <input type="file" name="userfile"> <br /><br/>
						<a href="#" class="btn">Upload</a>
					</p>
				</form>					
			</div><!-- ends span3 -->
			
			
			<div class="span2"></div>
		</div>
	
  <?php include 'TinyBiz/incluidos/footer.php'; ?>

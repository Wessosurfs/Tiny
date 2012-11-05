]<?php include 'TinyBiz/incluidos/final/head.php'; ?>


    <div class="container">
		
		<div class="row"><!-- title -->
			<div class="span10">
				<h1>Search Result</h1>
			</div>
			<div class="span2">
				[<a href="advanced-search.php">ADVANCED SEARCH</a>]
			</div>
		</div>
		
		<hr>
		
 		<div class="row">
			<div class="span3"></div>
			<div class="span2"></div><!-- ends span2 -->
			<div class="span4">	
				<h3>Description</h3>
				 <?php include 'TinyBiz/core/database/Query/searchq.php'; ?>			
			</div><!-- ends span3 -->
			<div class="span3"></div>
		</div>
	</div>	
		<hr>
	
  <?php include 'TinyBiz/incluidos/footer.php'; ?>

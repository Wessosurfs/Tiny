<?php include 'TinyBiz/core/functions/comment.php'; ?>


        <a href="#commentM" data-toggle="modal"><button class = "btn btn-info">Comment</button></a>
        <hr>

		<div class="row">
			<div class="span12">
				<div class="accordion" id="accordion2" style="background-color:#eee;">
					<div class="accordion-group">
				    		<div class="accordion-heading">
				      			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
									Show/Hide Comments
				      			</a>
				      		</div>

				      		<div id="collapseOne" class="accordion-body collapse in">
				      			<div class="accordion-inner">
									<?php include 'TinyBiz/core/database/Query/commentq.php'; ?>
				     			</div>
				     		</div>
					</div>
			  	</div>
			</div>
		</div>
		
		<!--Comment Modal-->
		<div class="modal hide fade" id="commentM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">My Account</h3>
			</div>
			<div class="modal-body">
				 	<form action="store.php" method = "POST">
						<div class="hero-unit">
							<input id="name" type="text" name="Name" style="width:70%; " placeholder="Name"/>
							<textarea name = "Comment" placeholder = "Comment..."></textarea>
							<p></p>
							<input class="btn btn-small btn-info" type="Submit" name="Submit" id="CommentButton" value="Comment" style="margin-left:10%; margin-top:5%"
							 aria-hidden="true"/>
						</div>	
			   		</form>	
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>						
			</div>
		</div><!--end modal-->


 


		
	 
<?php include 'TinyBiz/incluidos/final/head.php'; ?>

   <div class="container">  
		<div class="row"><!-- title -->
			<div class="span12">
			  <h1>Customize Store</h1>
			</div>
		</div>
		
		<hr>
		
    <form class = "">
     <div class = "row-fluid">
      <div class = "span12">
       <div class= "row-fluid">
        <div class = "span6">
      
         <img src="images.jpg" class="img-polaroid" width="140px">
         <a href="#contact" class = "btn btn-info btn-large">Change photo</a>
         
         <p></p>
         
         <input type="text"  style = "margin-top:30px"  placeholder ="New Address...">
         
         <p></p>
         
         <p style = "font-size:20px ;margin-top:30px;margin-left:25px"><i>Change Password</i><p>
         
         <p></p>
         
         <input type="text"  style = "margin-top:10px" placeholder ="Old Password...">
         
         <p></p>
         
         <input type="text"  placeholder ="New Password...">
         
         <p></p>
         
         <font class = "form-inline">
          <input type="text"  placeholder ="New Category...">
          <a href="#addItem" role="button" class="btn btn-info" data-toggle="modal">Add</a>
          <div class="modal hide" id="addItem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h2 id="myModalLabel">Category Added</h2>
           </div>
           
           <div class="modal-body">
            <p>The Category was added to the list of categories.</p>
           </div>
          
           <div class="modal-footer">
            <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Close</button>
           </div> 
          </div>
         </font>
        </div>
        
        <div class ="span6">
         
                
          <a href="#editStore" role="button" class="btn btn-info" data-toggle="modal">Rename Store <i class="icon-edit icon-white"></i></a>
           <div class="modal hide" id="editStore" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           
            <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h2 id="myModalLabel">Store Renaming</h2>
            </div>
           
            <div class="modal-body">
             <p>Enter the new name of the store.</p>
             <input type ="text" placeholder="Store Name">
             
             <p></p>
             
             <p>Enter the new owner of the store.</p>
             <input type ="text" placeholder="Owner's Name">
            </div>
          
            <div class="modal-footer">
             <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
             <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Save</button>
            </div> 
           </div>
			<br /><br />
           <a href="#DailySpecial" role="button" class="btn btn-info" data-toggle="modal" style="">Daily Special <i class="icon-plus icon-white"></i></a>
           <div class="modal hide" id="DailySpecial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           
            <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h2 id="myModalLabel">Daily Special</h2>
            </div>
           
            <div class="modal-body">
             <p></p>
             <img src="images.jpg" class ="polaroid" style="width:150px">
             <label for="file">Select file:</label> <input type="file" name="userfile"> <br /><br/>
             <p style="margin-top:20px"><b>Must be 200x100 pixels.  <p><b>It must be a <i>png</i> file</b></p> </b></p>
            </div>
          
            <div class="modal-footer">
             <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Cancel</button>
             <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Save</button>
            </div> 
           </div>
			
			<br /><br />
            <a href="#WeeklySpecial" role="button" class="btn btn-info" data-toggle="modal">Weekly Specials <i class="icon-plus icon-white"></i></a>
           <div class="modal hide" id="WeeklySpecial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           
            <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h2 id="myModalLabel">Add Shopper</h2>
            </div>
           
            <div class="modal-body">
             <p></p>
             <img src="images.jpg" class ="polaroid" style="width:150px">
             <label for="file">Add Thumbnail:</label> <input type="file" name="userfile"> <br /><br/>
             <p style="margin-top:20px"><b>Must be 200x100 pixels.  <p><b>It must be a <i>png</i> file</b></p> </b></p>
             
             <p style="margin-top:20px"></p>
             
             <font class = "form-inline">
              <label for="file">Select file:</label> <input type="file" name="userfile"> <br /><br/>
              <label type="text"> PDF file</label>
             </font>
             
            </div>
          
            <div class="modal-footer">
             <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Cancel</button>
             <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Save</button>
            </div> 
           </div>



         <p></p>
        
         <p style = "font-size:20px;margin-top:30px;margin-left:75px;margin-top:40px"><i>Add Item</i><p>
        
        
         <p></p>
        
         <input type="text"  style = ""  placeholder ="New Item...">
         
         <a href="#AI" role="button" class="btn btn-info" data-toggle="modal">Add Item <i class="icon-plus icon-white"></i></a>
          <div class="modal hide" id="AI" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h2 id="myModalLabel">Item Adding</h2>
           </div>
           
           <div class="modal-body">
            <p>The item was added to your list.</p>
             
            <p></p>
           
           </div>
          
           <div class="modal-footer">
            <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Close</button>
           </div> 
          </div>
          
         <p></p>
        
         <input type="text"  style = ""  placeholder ="Item Price...">
        
         <p style = "font-size:20px ;margin-top:30px;margin-left:25px"><i>Change Email</i><p>
         
         <p></p>
         
         <input type="text"  style = ""  placeholder ="Old Email...">
        
         <p></p>
        
         <input type="text"  style = ""  placeholder ="New Email...">    
        </div>
       </div>
      </div>
     </div>
     
     <a class="btn btn-info" style="margin-top:55px; margin-left:-15px;margin-bottom:-15px" href="index.php">Save</a>
    </form>
	
	<?php include 'TinyBiz/incluidos/footer.php'; ?>
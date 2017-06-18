<?php include("functions/function.php");gen_header(D); ?>
<div class="about_banner">
	<div class="container">
		<h2>Profile</h2>
		<span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Profile</span></span>
	</div>
</div>
<div class="about_top">
 <div class="container">
	 <div class='col-md-3 column-8'>
	 <?php
	$user=$_SESSION['username'];
	$get_avatar = "select * from userprofile where username='$user'";
	$run_avatar = mysqli_query ($con,$get_avatar);

	while ($row_avatar = mysqli_fetch_array ($run_avatar)){
		$user_avatar= $row_avatar['avatar'];
	
		echo "<a>
	 <img style='
	 
	min-height: 300px;
	max-width:  300px;
    z-index: 10;
    padding: 0;' src='users/users_images/$user_avatar'> </a>";}
	?>
		 </div>
		 
	
	<div class="col-md-9 column-2">
	   <h4>About Me</h4>
		 <div class="entry-meta"> 
		 	
		 	<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections</p>
		 	<div class="footer-social about_social">
			    <a target="_blank" href="" hidefocus="true" style="outline: none;"><i class="fa fa-facebook"></i></a>
				<a target="_blank" href="" hidefocus="true" style="outline: none;"><i class="fa fa-twitter"></i></a>
				<a target="_blank" href="" hidefocus="true" style="outline: none;"><i class="fa fa-google-plus"></i></a>
	        </div>
			<h5>My Interests</h5>
		 	<ul class="classified_list classified_list1">
               	  <li><a href="classified_single.html">Affiliate Network</a></li>
               	  <li><a href="classified_single.html">Charity</a></li>
               	  <li><a href="classified_single.html">Commodities</a></li>
               	  <li><a href="classified_single.html">Entertainment</a></li>
               	  <div class="clearfix"></div>
               </ul>
			   <div class="clearfix"></div>
			   <div class="content-inner_2">
				   			<p>&nbsp;</p>
			<h4 class="m_11">MENU</h4>
			<ul style="list-style:b;">
		<div class="row">
     	<div class="col-sm-6">
	     <div class="btn-wrap">
			<a href="#" class="btn btn-default medium effect21 btn-default_2 pull-left" data-toggle="modal" data-target="#menu1">
				<i class="fa fa-sign-in"></i>
				Add thread
			</a>
	     </div>
	   </div>
	   <div class="col-sm-6">
	     <div class="btn-wrap">
			<a href="#" class="btn btn-default medium effect22 btn-default_2 pull-left" data-toggle="modal" data-target="#menu2">
				<i class="fa fa-sign-in"></i>
				Add Profile Picture
			</a>
	     </div>
	   </div>
	 </div></li>
	 
    <li><div class="row">
    	<div class="col-sm-6">
	       <div class="btn-wrap">
			<a href="#" class="btn btn-default large effect23" target="_self">
				<i class="fa fa-info"></i>
				Change profile
			</a>
	      </div>
	     </div>
	     <div class="col-sm-6">
	      <div class="btn-wrap">
			<a href="#" class="btn btn-default large effect24" target="_self">
				<i class="fa fa-info"></i>
				Edit About Me
			</a>
	      </div>
	    </div>
	  </div></li>
	  </ul>
	  <div class="clearfix"></div>

			<!-- Menu1-->
				<div class="modal fade" id="menu1" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog_2">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel">
					        		<div class="head_4">
			                          <p>Add thread</p>
			                        </div>
			                    </h4>
					      	</div>
	                        <div class="modal-body">
                             <form action='profile.php' method='post' enctype='multipart/form-data' class="register">
                               <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="title" id="username" placeholder="Thread TOPIC">
                                    <label for="username" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                               </div>
                               <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="body" id="username" placeholder="Body of the thread">
                                    <label for="username" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                             </div>
								<div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="keyword" id="username" placeholder="Tags: seperate tags for easy search">
                                    <label for="username" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                             </div>
                               <div class='section'>
                                  <label for='name' class='field prepend-icon'>
                                    <select name='category' path='college' id='college' class='form-control input-sm'>
				                        <option value=''>Select Category</option>
				                        <option value='1'>COLPHYS</option>
				                        <option value='2'>COLBIOS</option>
				                        <option value='3'>COLPLANT</option>
				                        <option value='4'>COLANIM</option>
				                        <option value='5'>COLAMRUD</option> 
				                        <option value='6'>COLERM</option> 
				                        <option value='7'>COLFHEC</option> 
				                        <option value='8'>COLVET</option> 
				                        <option value='9'>COLMAS</option> 
				                        <option value='10'>COLENG</option> 
				                    </select>
                                    <label for='name' class='field-icon'>
                                        <i class='fa fa-user'></i>
                                    </label>
                                  </label>
                               </div>
                             <div class="section">
                                <div class="submit"><input type="submit" onclick="myFunction()" value="add thread" name="thread"></div>
                             </div>
                           </form>
                        </div>
				    </div>
				 </div>
				</div>
				 <!-- Menu1 -->
			<!-- Menu2-->
				<div class="modal fade" id="menu2" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog_2">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel">
					        		<div class="head_4">
			                          <p>Add Profile Picture</p>
			                        </div>
			                    </h4>
					      	</div>
	                        <div class="modal-body">
                             <form action='profile.php' method='post' enctype='multipart/form-data' class="register">
                               <div class="section">
                                <label for="username" class="field prepend-icon">
									<i class="fa fa-user"></i>        
									<input type="file" name="avatar" id="username" placeholder="Upload an imange" required="">
									
									<p>&nbsp;</p>
                                    
                                </label>
                             <div class="section">
                                <div class="submit"><input type="submit" onclick="myFunction()" value="add image" name="avatar"></div>
                             </div>
                           </form>
                        </div>
				    </div>
				 </div>
				</div>
				 <!-- Menu2 -->



	 </div>
		 </div>
	  </div>		
    <div class="clearfix"> </div>
 </div>
</div>
<?php footer() ?>
</body>
</html>

<?php
	$t_creator = $_SESSION['username'];
if (isset($_POST['thread'])){
	$t_title = $_POST['title'];
	$t_body = $_POST['body'];
	$t_key = $_POST['keyword'];
	$t_cat = $_POST['category'];


	$insert_t = "INSERT INTO `thread`(`title`, `body`, `creator`, `category`, `tags`) VALUES ('$t_title','$t_body','$t_creator','$t_cat','$t_key')";
	$run_thread = mysqli_query ($con, $insert_t);

	if ($run_thread){
	echo "<script> alert ('Thread Added Successfully!') </script>";
}
}

if (isset($_POST['avatar'])){
	$u_image = $_FILES['avatar']['name'];
	$u_image_tmp = $_FILES['avatar']['tmp_name'];

	move_uploaded_file($u_image_tmp,"users/users_images/$u_image");

	$insert_avatar = "UPDATE `userprofile` SET `avatar`='$u_image' WHERE username='$t_creator'";
	
	$run_avatar = mysqli_query ($con, $insert_avatar);

	$insert_avatar1 = "UPDATE `thread` SET `avatar`='$u_image' WHERE creator='$t_creator'";
	
	$run_avatar1= mysqli_query ($con, $insert_avatar1);

	if ($run_avatar && $run_avatar1){
	echo "<script> alert ('Profile Picture Added Successfully!') </script>";
}
else{echo "<script> alert ('PP adding failed') </script>";}
}


?>
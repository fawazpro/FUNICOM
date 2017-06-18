<?php 
include("functions/function.php");
gen_header(C); ?>
<div class="about_banner">
	<div class="container">
		<h2>Contact</h2>
		<span class="breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Contact</span></span>
	</div>
</div>
<div class="about_top">
 <div class="container">
	<div class="col-md-3 column-1 column-13">
	   <i class="fa fa-envelope-o envelop"></i>
	      <address class="address">
              <p>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
              <dl>
                 <dt></dt>
                 <dd>Freephone :&nbsp;<span> +1 800 254 2478</span></dd>
                 <dd>Telephone :&nbsp;<span> +1 800 547 5478</span></dd>
                 <dd>FAX :&nbsp;<span>+1 800 658 5784</span></dd>
                 <dd>E-mail :&nbsp;<a href="mailto:@example.com">info@community.com</a></dd>
                 
              </dl>
           </address>
		
	</div>
	<div class="col-md-9 column-9">
	  <h3>Feedback</h3>
	   <p class="m_4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		   <form class="contact">
			  <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			  <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			  <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
			  <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
	          <div class="submit-wrap">
	          	<input type="submit" value="Send">
	          	<input type="reset" value="Clear">
	          </div>
		   </form>
      </div>		
    <div class="clearfix"> </div>
 </div>
</div>
<div class="map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<?php footer() ?>	
</body>
</html>
<?php $this->load->view('_blocks/uncharted_header')?>
	
	<!-- Main Container -->
	<div class="container">
			
		<!-- #main content -->
		<div class="single eleven columns" id="main" role="main">
			<article>
				<header>
					<h1 class="page-title page-title-with-sub">We are Hiring</h1>
					<h5 class="sub-page-title" >Please read the whole page before responding.</h5>
				</header>
			
				<div id="contact" class="contact-form">
					
					<div id="message"></div>
					
					<form method="post" action="<?php echo base_url()?>assets/ajaxcontact/contact.php" name="contactform" id="contactform">
            <div id="contact_left">
              <label for="name" accesskey="n">Name</label> <input type="text" name="name" id="name" />
              <label for="phone" accesskey="p">Phone</label> <input type="text" name="phone" id="phone" />
            </div>
            <div id="contact_right">
              <label for="email" accesskey="e">Email</label> <input type="text" name="email" id="email" />
              <label for="website" accesskey="w">Portfolio Website</label> <input type="text" name="website" id="website" />
            </div>
            <div class="clearfix"></div>
            <div>
						<label for="comments" accesskey="m">Message</label> <textarea name="comments" id="comments"></textarea>
						<input type="submit" value="Send" />
            </div>
					</form>
					
				</div>
				
				<br/><br/>
				
				<div class="three columns alpha">
					<div class="address">
						<h5><strong>We are hiring for the following positions:</strong></h5>
            <ul>
              <li>Part-Time Front End Developer</li>
              <li>Part-Time PHP Programmer</li>
              <li>Part-Time Graphic Designer</li>
            </ul>
            <p>
              We have offices in Houston, TX and Nashville, TN but will accept applications
              from anywhere in the United States.
            </p>
					</div>
				</div>
				<div class="eight columns omega">
					<h5><strong>We use the following:</strong></h5>
            <ul>
              <li>PHP 5.0+</li>
              <li>Code Igniter Framework</li>
              <li>FUEL CMS</li>
              <li>HTML5, CSS3, JQuery, JQuery UI</li>
            </ul>
            <p>
              When you apply, please include a link to examples of your work,
              and please give us correct contact information. Please also include the
              phrase "I Love Apple Pie" in the body of your message. We are looking for
              talented people who can follow directions and be creative within 
              a project requirements.  We are a growing company and look forward
              to expanding with you involved!
            </p>
				</div>
				
			</article>
		</div>		
		<!-- end #main content layout -->
			
			
		<!-- sidebar -->
		<div class="sidebar four columns offset-by-one">
			
<!--			<aside class="search-bar">
				<form>
					<label class="fallback">Search</label>
					<input type="text" name="search" placeholder="Enter to search &rarr;"/>
				</form>					
			</aside>-->
			
			<aside>
        <?php echo fuel_var('sidebar_content_1', ''); ?>
				
        <?php echo fuel_var('sidebar_image_1', ''); ?>
				
        <?php echo fuel_var('call_to_action_button', ''); ?>
				
			</aside>
			
			<aside class="adspace">
        <?php echo fuel_var('sidebar_marketing_image', ''); ?>
			</aside>
			
			<aside>
        <?php echo fuel_var('sidebar_link_list', ''); ?>
			</aside>
			
		</div>
		<!-- end .sidebar -->	
			
			
			
	</div>
	<!-- end .container -->
	
<?php $this->load->view('_blocks/uncharted_footer')?>

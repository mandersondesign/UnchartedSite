<?php $this->load->view('_blocks/uncharted_header')?>
	
	<!-- Main Container -->
	<div class="container">
			
		<!-- #main content -->
		<div class="single eleven columns" id="main" role="main">
			<article>
				<header>
					<h1 class="page-title page-title-with-sub">Hire Us</h1>
					<h5 class="sub-page-title" >Tell Us About You!</h5>
				</header>
			
				<div id="contact" class="contact-form">
					
					<div id="message"></div>
					
					<form method="post" action="<?php echo base_url()?>assets/ajaxcontact/contact.php" name="contactform" id="contactform">
            <div id="contact_left">
              <label for="name" accesskey="n">Name</label> <input type="text" name="name" id="name" />
              
              <label for="phone" accesskey="p">Phone</label> <input type="text" name="phone" id="phone" />
              
              <label for="budget" accesskey="b">Budget</label> 
              <select name="budget" id="budget" >
                <option value="select">Select...</option>
                <option value="0-1000">< $1000</option>
                <option value="1000-3000">$1000 - $3000</option>
                <option value="3000-5000">$3000 - $5000</option>
                <option value="5000-7500">$5000 - $7500</option>
                <option value="7500-10000">$7500 - $10,000</option>
                <option value="10000-15000">$10000 - $15,000</option>
                <option value="15000-20000">$15000 - $20,000</option>
                <option value="20000-30000">$20,000 - $30,000</option>
                <option value="30000+">$30,000+</option>
              </select>
            </div>
            <div id="contact_right">
              <label for="email" accesskey="e">Email</label> <input type="text" name="email" id="email" />
              <label for="website" accesskey="w">Current Website</label> <input type="text" name="website" id="website" />
              
              <label for="timeline" accesskey="t">Timeline</label> 
              <select name="timeline" id="timeline" >
                <option value="select">Select...</option>
                <option value="1-3 months">1 - 3 Months</option>
                <option value="3-6 months">3 - 6 months</option>
                <option value="6 months+">6+ months</option>
            </select>
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
						<h5><strong>Uncharted Technologies, LLC</strong></h5>
						Opal Valley<br/>
						Houston, TX 77065
					</div>
				</div>
				<div class="eight columns omega">
					<div class="map_canvas" 
						data-lat="29.760193"
					data-lng="-95.369390"
					data-address="Houston, Texas" 
					data-zoom="12" 
					data-mapTitle="Uncharted Technologies"
						style="height:220px;width:100%;"></div> 
					<br/>
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
				
			</aside>
			
		</div>
		<!-- end .sidebar -->	
			
			
			
	</div>
	<!-- end .container -->
	
<?php $this->load->view('_blocks/uncharted_footer')?>

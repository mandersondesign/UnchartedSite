<?php $this->load->view('_blocks/uncharted_header')?>
	
	<!-- Main Container -->
	<div class="container">
			
		<!-- #main content -->
		<div class="single eleven columns"  id="main" role="main">
			<article>
				<header>
					<h1 class="page-title">About Us</h1>
				</header>
									
				<div class="post-content" id="tagline-demo">
					
          <?php echo fuel_var('content_section_1', ''); ?>
            
          <?php echo fuel_var('bottom_content', ''); ?>
          
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
				
        <?php echo fuel_var('call_to_action_button', ''); ?>
				
			</aside>
			
<!--			<aside>
        <?php echo fuel_var('sidebar_link_list', ''); ?>
			</aside>-->
			
		</div>
		<!-- end .sidebar -->	
			
			
			
	</div>
	<!-- end .container -->
	
<?php $this->load->view('_blocks/uncharted_footer')?>

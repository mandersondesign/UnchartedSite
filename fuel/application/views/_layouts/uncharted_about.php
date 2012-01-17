<?php $this->load->view('_blocks/uncharted_header')?>
	
	<!-- Main Container -->
	<div class="container">
			
		<!-- #main content -->
		<div class="single eleven columns"  id="main" role="main">
			<article>
				<header>
					<h1 class="page-title">About</h1>
				</header>
									
				<h3>
        <?php echo fuel_var('header_1', ''); ?>
        </h3>
				
				<div class="post-content" id="tagline-demo">
					
					<div class="tagline">
            <?php echo fuel_var('tagline', ''); ?>
						
					</div>
					
          <?php echo fuel_var('content_section_1', ''); ?>
          
					<blockquote id="blockquote-demo">
            <?php echo fuel_var('quote', ''); ?>
					</blockquote>
					
          <?php echo fuel_var('pullquote', ''); ?>
            
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

<?php $this->load->view('_blocks/uncharted_header')?>
	
	<!-- Main Container -->
	<div class="container" id="main" role="main">
		
		<div class="sixteen columns">

			<!-- FlexSlider -->
			<div class="flex-container">
			  <div class="flexslider">
			    <ul class="slides">
			    	<li>
			    		<a href="responsive-grid.php"><img src="http://placehold.it/940x400" alt="Fully Responsive" /></a>
			    	</li>
			    	<li>
			    		<a href="responsive-slider.php"><img src="<?php echo base_url()?>assets/images/slides/minimal_design_slide.jpg" alt="Minimalist Design"/></a>
			    	</li>
			    	<li>
			    		<a href="about.php"><img src="<?php echo base_url()?>assets/images/slides/beautiful_typography_slide.jpg" alt="Beautiful Typography"/></a>
			    	</li>
			    	<li>
			    		<img src="<?php echo base_url()?>assets/images/slides/html5_slide.jpg" alt="HTML5"/>
			    	</li>
			    	<li>
			    		<a href="responsive-grid.php"><img src="<?php echo base_url()?>assets/images/slides/responsive_layout_slide.jpg" alt="Responsive Layout"/></a>
			    	</li>
			    </ul>
			  </div>
		 	</div>
			<!-- end FlexSlider -->				
			
			<!-- Tagline -->
			<div class="tagline">
        <?php echo fuel_var('tagline', ''); ?>
				<span class="fleuron"></span>
			</div>
			<!-- end Tagline -->
		</div>
		
		
		<!-- Mosaic Layout -->		
		<div class="mosaic row clearfix" id="featured-columns">
				
			<!-- feature column -->
			<div class="feature-column one-third column">
        <?php echo fuel_var('feature_column_1', ''); ?>
			</div>
			<!-- end .feature-column -->
			
	
			<!-- feature column -->
			<div class="feature-column one-third column">
        <?php echo fuel_var('feature_column_2', ''); ?>
			</div>
			<!-- end .feature-column -->
			
	
			<!-- feature column -->
			<div class="feature-column one-third column">
        <?php echo fuel_var('feature_column_3', ''); ?>
			</div>
			<!-- end .feature-column -->
			
				<div class="clear"></div>
		</div>
		<!-- end mosaic -->
		
		<hr class="mini" />
		
		<div class="row">
			<div class="eight columns">
				<?php echo fuel_var('content_block_1', ''); ?>
			</div>
			
			<div class="four columns">
        <?php echo fuel_var('content_block_2', ''); ?>
			</div>
			
			<div class="four columns">
        <?php echo fuel_var('content_block_3', ''); ?>
			</div>
		</div>
						
	</div>
	<!-- end #main.container -->
	
<?php $this->load->view('_blocks/uncharted_footer')?>

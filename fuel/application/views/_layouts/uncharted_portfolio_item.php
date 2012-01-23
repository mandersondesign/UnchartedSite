<?php $this->load->view('_blocks/uncharted_header')?>
	
	<!-- Main Container -->
	<div class="container">
		
		<article class="post portfolio-item single"  id="main" role="main">
			
			<!-- Left Column - Photo or Video -->
			<div class="ten columns">
								
				<div class="featured-image img-wrapper full-width">
				
          <?php echo fuel_var('featured_image', ''); ?>
					

				</div>
											
			</div>
			<!-- end left column -->
			
			<!-- Right Column - Details -->
			<div class="six columns">
				<header>
					<h1 class="page-title"><?php echo fuel_var('project_name', ''); ?></h1>
					<div class="post-meta">
						<div class="four columns alpha">
							<a href="#" class="post-category"><?php echo fuel_var('project_type', ''); ?></a>
						</div>
						<div class="portfolio-meta-icons ">
															
							<span class="post-time tooltip-container">
								<a href="#" class="tooltip-anchor icon calendar-icon"></a>
								<span class="tooltip">
									<time datetime="2011-11-05" class="post-date">
                    <?php echo fuel_var('launch_date', ''); ?>
                  </time>
								</span>
							</span>
							
							<span class="post-permalink tooltip-container"><a href="<?php echo fuel_var('web_address', ''); ?>" class="icon permalink-icon tooltip-anchor"></a><span class="tooltip">link</span></span>
						</div>
					</div>
				</header>
				
				<div class="post-content">
          <?php echo fuel_var('project_description_1', ''); ?>
									
				</div>
					
			</div>
			<!-- end right column -->
      <div class="clearfix"></div>
			<div class="post-content">
        <br/>
        <?php echo fuel_var('project_description_2', ''); ?>
      </div>
		</article>
							
	</div>
	<!-- end #main.container -->
	
<?php $this->load->view('_blocks/uncharted_footer')?>

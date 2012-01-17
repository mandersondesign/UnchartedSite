<?php $this->load->view('_blocks/uncharted_header')?>
	<!-- Main Container -->
	<div class="container">
			
		<!-- Standard Blog Layout Layout -->		
		<div class="blog-layout eleven columns" id="main" role="main">
	
			<h2 class="page-title">The Blog</h2>
	
		<?php echo fuel_var('body', ''); ?>
	</div>		
		<!-- end blog layout -->
		
		
		<!-- sidebar -->	
		<div class="sidebar four columns offset-by-one">
			
			<aside class="search-bar">
				<form>
					<label class="fallback">Search</label>
					<input type="text" name="search" placeholder="Enter to search &rarr;"/>
				</form>					
			</aside>
			
			<aside>
				<h3>A Responsive Design?</h3>
				<p>Agility looks beautiful at any size, from a widescreen monitor to an iPhone,
					because the layout responds dynamically to the viewport size to optimize the
					user's experience. Based on the Skeleton Framework's responsive grid, Agility 
					has all the flexibility you need for today's eclectic device landscape.</p>
				
				<p><img src="http://placehold.it/220x110" class="scale-with-grid" alt="Responsive Device Group - Small" /></p>
					
				<a class="button button-red button-full" href="responsive-grid.php">See it in action &rarr;</a>
									
			</aside>
			
			<aside class="adspace">
				<div class="ad-200x200">
					200&times;200
				</div>
			</aside>
			
			<aside>
				<h3>Also by SevenSpark</h3>
				<h6>WordPress Plugins</h6>
				<ul class="link-list">
					<li><a href="http://bit.ly/UberMenu">UberMenu &ndash; WordPress Mega Menu</a></li>
					<li><a href="http://bit.ly/qpdDzH">Menu Management Enhancer for WordPress</a></li>
					<li><a href="http://bit.ly/g64hdB">Scroll Checkpoint &ndash; Animated Content Panels Plugin</a></li>						
				</ul>
			</aside>
			
		</div>		
		<!-- end .sidebar -->		
			
	</div>
	<!-- end #main.container -->
	
<?php $this->load->view('_blocks/uncharted_footer')?>

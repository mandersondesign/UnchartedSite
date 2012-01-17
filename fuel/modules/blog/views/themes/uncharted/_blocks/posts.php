<div class="posts left">
	<?=fuel_edit('create', 'Create Post', 'blog/posts')?>
	<?php if (!empty($posts)) : ?>
		<?php 
    $i = 0;
    
    foreach($posts as $post) : 
      if ($i==0)
      {
      ?>
      <?=fuel_edit($post->id, 'Edit Post: '.$post->title, 'blog/posts')?>
			<?=blog_block('post_unpublished', array('post' => $post))?>
  
      <!-- latest post -->
			<article class="post first">
				<div class="latest-indicator">
					Latest
				</div>					
			
				<!-- post header -->
				<header>
						
					<h1><a href="<?=$post->url?>"><?=$post->title?></a></h1>
								
					<!-- post meta -->
					<div class="post-meta">
						<div class="four columns alpha">
							<span class="post-category"><?=$post->categories_linked ?></span>
						</div>
						<div class="seven columns omega far-edge">
							by <a href="#" class="post-author"><?=$post->author_name?></a> on
							<time datetime="2011-09-26" class="post-date"><?=$post->get_date_formatted('F')?> <?=$post->get_date_formatted('d')?>, <?=$post->get_date_formatted('Y')?></time>
						</div>
					</div>
					<!-- end .post-meta -->			
					
					<!-- featured image -->				
					<div class="featured-image img-wrapper seven columns alpha">
						<!-- lightbox with image -->
						<a href="http://placehold.it/640x320" data-rel="prettyPhoto" class="img-link preload"
							title="In Love by h.koppdelaney http://www.flickr.com/photos/h-k-d/3838158206/" 
							><img src="http://placehold.it/640x320" alt="Wuthering Heights" class="scale-with-grid" /></a>
						<!-- end lightbox with image -->
					</div>
					<!-- end .featured-image -->
				</header>
				
				<!-- post content -->
				<div class="four columns omega">
						
					<!-- post excerpt -->
					<div class="post-excerpt">
						<p><?=$post->excerpt?></p>
						<a href="<?=$post->url?>" class="excerpt-link">Continue Reading &rarr;</a>								
					</div>
					<!-- end .post-excerpt -->
							
					<!-- post footer -->
					<footer>													
						<span class="post-tags tooltip-container"><a href="#" class="icon tag-icon tooltip-anchor"></a><span class="tooltip"><a href="#">novel</a>, <a href="#">Ellis Bell</a>, <a href="#">Catherine</a>, <a href="#">Heathcliff</a>, <a href="#">English</a></span></span>
						<span class="post-comments tooltip-container"><a href="#comments" class="icon comments-icon tooltip-anchor"></a><span class="tooltip">5 Comments</span></span> 
						<span class="post-permalink tooltip-container"><a href="post-1" class="icon permalink-icon tooltip-anchor"></a><span class="tooltip">Permalink</span></span>
					</footer>
					<!-- post footer -->
				</div>
				<!-- end post content -->
				
				<div class="clear"></div>
				
			</article>
			<!-- end .post.first (latest) -->
  
    <?php 
    }
    else
    {
    ?>
      <!-- post -->
			<article class="post">
			
				<!-- post header -->
				<header>
					<!-- featured image -->
					<div class="featured-image img-wrapper four columns alpha">
						<!-- lightbox with image -->
						<a href="http://placehold.it/640x320" data-rel="prettyPhoto" class="img-link preload"
							title="loneliness by alicepopkorn http://www.flickr.com/photos/alicepopkorn/5973536077/" 
							><img src="http://placehold.it/640x320" alt="The War of the Worlds" class="scale-with-grid" /></a>
						<!-- end lightbox with image -->
					</div>
					<!-- end .featured-image -->
					
					<div class="seven columns omega">
							
						<h1><a href="<?=$post->url?>"><?=$post->title?></a></h1>

						<!-- post meta -->
            <div class="post-meta">
              <div class="three columns alpha">
                <span class="post-category"><?=$post->categories_linked ?></span>
              </div>
              <div class="four columns omega far-edge">
                by <a href="#" class="post-author"><?=$post->author_name?></a> on
                <time datetime="2011-09-26" class="post-date"><?=$post->get_date_formatted('F')?> <?=$post->get_date_formatted('d')?>, <?=$post->get_date_formatted('Y')?></time>
              </div>
            </div>
            <!-- end .post-meta -->
							
					</div>
				</header>
				
				<!-- post content -->
				<div class="seven columns omega">
						
					<!-- post excerpt -->
					<div class="post-excerpt">
						<p><?=$post->excerpt?></p>
						<a href="<?=$post->url?>" class="excerpt-link">Continue Reading &rarr;</a>								
					</div>
					<!-- end .post-excerpt -->
							
					<!-- post footer -->
					<footer>													
						<span class="post-tags tooltip-container"><a href="#" class="icon tag-icon tooltip-anchor"></a><span class="tooltip"><a href="#">novel</a>, <a href="#">Ellis Bell</a>, <a href="#">Catherine</a>, <a href="#">Heathcliff</a>, <a href="#">English</a></span></span>
						<span class="post-comments tooltip-container"><a href="#comments" class="icon comments-icon tooltip-anchor"></a><span class="tooltip">5 Comments</span></span> 
						<span class="post-permalink tooltip-container"><a href="post-1" class="icon permalink-icon tooltip-anchor"></a><span class="tooltip">Permalink</span></span>
					</footer>
					<!-- post footer -->
				</div>
				<!-- end post content -->
				
				<div class="clear"></div>
				
			</article>
			<!-- end .post -->
    
		<?php 
    }
    
    $i++;
    endforeach; ?>
		
		<div class="view_archives">
			<?php if (!empty($pagination)) : ?><?=$pagination?>  &nbsp;<?php endif; ?>
      <!-- Blog Navigation -->
			<nav class="blog-navigation">
				<a href="<?=blog_url('archives')?>" class="five columns alpha">&larr; View our Archives</a>
				<!--<a href="#" class="five columns omega offset-by-one far-edge">Newer Posts &rarr;</a>-->		
			</nav>
			<!-- end .blog-navigation -->
			
		</div>
		
	<?php else: ?>
	<div class="no_posts">
		<p>There are no posts available.</p>
	</div>
	<?php endif; ?> 
</div>
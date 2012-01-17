<!-- Single Post -->
<article class="post single">	
  <?=fuel_edit($post->id, 'Edit Post', 'blog/posts')?>
	<?=blog_block('post_unpublished', array('post' => $post))?>
  
  <?php
    $author = $post->get_author();
  ?>
  
  <header>	
    <h1 class="page-title" ><?=$post->title?></h1>

    <div class="post-meta">
      <div class="five columns alpha">
        <a href="#" class="post-category"><?=$post->categories_linked ?></a>
      </div>
      <div class="six columns omega far-edge">
        by <a href="#author-bio" class="post-author"><?=$post->author_name?></a> on
        <time datetime="2011-09-26" class="post-date"><?=$post->get_date_formatted()?></time>
      </div>
    </div>
  </header>

  <!-- featured-image -->
  <div class="featured-image img-wrapper full-width">
    <!-- lightbox with image -->
    <a href="http://placehold.it/640x320" data-rel="prettyPhoto" class="img-link preload"
      title="In Love by h.koppdelaney http://www.flickr.com/photos/h-k-d/3838158206/" 
      ><img src="http://placehold.it/640x320" alt="Wuthering Heights" class="scale-with-grid" /></a>
    <!-- end lightbox with image -->

    <span class="single-post-feature-expander">&harr;</span>
  </div>
  <!-- end .featured-image -->

  <div class="post-content">	
    <?=$post->content_formatted?>
  </div>

  <!-- post footer -->
  <footer>													
    <span class="post-tags tooltip-container"><a href="#" class="icon tag-icon tooltip-anchor"></a><span class="tooltip"><?=$post->categories_linked ?></span></span>
    <span class="post-comments tooltip-container"><a href="#comments" class="icon comments-icon tooltip-anchor"></a><span class="tooltip">5 Comments</span></span> 
    <span class="post-permalink tooltip-container"><a href="post-1" class="icon permalink-icon tooltip-anchor"></a><span class="tooltip">Permalink</span></span>
  </footer>
  <!-- post footer -->

</article>	
<!-- end .post -->

<!-- Author Biography -->
<aside id="author-bio" class="author-bio single-post-extra">
  <h6 class="author-bio-tag">About the Author</h6>
  <div class="three columns alpha">
    <img src="http://placehold.it/160x235" class="scale-with-grid" alt="Emily Bront√´"/>
  </div>
  <div class="eight columns omega">
    <h5><?=$post->author_name?></h5>
    <div class="author-bio-blurb">
      <?=$author->about?>
    </div>
  </div>
  <div class="clear"></div>
</aside>
<!-- end #author-bio -->

<a name="comments"></a>

	<?php if ($post->comments_count > 0) : ?>
		<h3>Comments</h3>
		<div class="comments">

			<?php foreach($post->comments as $comment) : ?>

				<div class="<?=($comment->is_child()) ? 'comment child' : 'comment'?>">

					<a name="comment<?=$comment->id?>"></a>
					<div class="comment_content">
						<?php if ($comment->is_by_post_author()) :?>
						<?=$comment->post->author->get_avatar_img_tag(array('class' => 'img_left'))?>
						<?php endif; ?>
						<?=$comment->content_formatted?>
					</div>


					<div class="comment_meta">
						<cite><?=$comment->author_and_link?>, <?=$comment->get_date_formatted('h:iA / M d, Y')?></cite>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

<?php if ($post->allow_comments) : ?>
	<div class="comment_form">
	<a name="comments_form"></a>

	<?php if ($post->is_within_comment_time_limit()) : ?>
		<?php if (empty($thanks)) : ?>
		<h3>Leave a Comment</h3>
		<?php else: ?>
		<?=$thanks?>
		<?php endif;
		 ?>
		<?=$comment_form?>
	<?php else: ?>
		<p>Comments have been turned off for this post.</p>
	<?php endif; ?>
	</div>

<?php else: ?>
	<p>Comments have been closed.</p>
<?php endif; ?>

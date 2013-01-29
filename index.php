<?php get_header(); ?> 

		<div id="content" class="grid_9 alpha">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post"><!-- start loop -->
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<div class="post_body">
						<?php the_content('Read more…'); ?>
						<div class="tags"><?php the_tags( 'Tagged: ', ' ' ); ?> </div>
					</div>
					<p class="post_footer"><a href="<?php the_permalink() ?>">Posted <?php the_time('d M Y'); ?> <?php the_time('H:i'); ?></a> by <?php the_author_posts_link(); ?> | <?php the_category(', '); ?> | <a href="<?php comments_link(); ?>"><?php comments_number('No comments', '1 comment', '% comments'); ?></a><?php edit_post_link('Edit Post', ' | '); ?></p>
				</div><!-- end loop -->
	
			<?php endwhile; else: ?>
	
			<!-- If there are no posts display the message below -->
				<h3>Whoops...</h3>
				<p>Sorry, no posts were found.</p>
			<?php endif; ?> 
	
			<!-- Comments? -->   
			<div id="comments_box" class="grid_6 suffix_3 alpha">
				<?php comments_template(); ?>        
			</div>
			<!-- Display the Next and Prev post links -->
			<p id="pagination"><?php posts_nav_link(); ?></p>
		</div><!-- end content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
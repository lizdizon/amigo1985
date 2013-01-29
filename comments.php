<div id='commentform' class='suffix_3 grid_9 alpha'>

<h3 id="respond"><div id="comment_box_title">User Input</div></h3>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<p class='grid_8'>
		<input class='grid_2' name="author" id="author" value="" tabindex="1" type="text">
		<label for="author">
			<small>Name ( required )</small>
		</label>
	</p>
	<p class='grid_8'>
		<input class='grid_2' name="email" id="email" value="" tabindex="2" type="text">
		<label for="email">
			<small>E-mail - will not be published ( required )</small>
		</label>
	</p>
	<p class='grid_8'>
		<input class='grid_2' name="url" id="url" value="" tabindex="3" type="text">
		<label for="url">
			<small>Website</small>
		</label>
	</p>
	<p class='grid_8'>
		<textarea class='grid_8' name="comment" id="comment" tabindex="4" rows="7"></textarea>
	</p>
	<p class='grid_8 omega'>
		<input name="submit" id="submit" tabindex="5" value="Submit Comment" type="submit">
		<input name="comment_post_ID" value="<?php the_ID(); ?>" type="hidden">
	</p>
</form>
</div>

<ul class='grid_9'>
    <?php wp_list_comments('avatar_size=48'); ?>
</ul>

<div id="comments_footer" class="grid_9 suffix_3 omega">&nbsp;</div>
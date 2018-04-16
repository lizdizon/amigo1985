<?php
/*
Template Name: Archive
*/

get_header(); ?>

<div id="content" class="grid_9 alpha">
	<div class="post">
		<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		<div class="post_body">
				<div><?php get_search_form(); ?></div>
				<div><br/></div>
				<table>
				<tr>
					<td valign=top>
						<h2>By Month</h2>
						<ul><?php wp_get_archives('type=monthly'); ?></ul>
					</td>
					<td valign=top>
						<h2>By Subject</h2>
						<ul><?php wp_list_categories(); ?></ul>
					</td>
				</tr>
				</table>

		</div><!-- post_body -->
		<p class="post_footer"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
	</div><!-- post -->
</div><!-- content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

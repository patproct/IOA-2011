<?
/*
 * Template Name: News
*/
?>
<?php get_header(); ?>
<div id="main">
	<?
	$news_query = new WP_Query('category_name=News');
	
	if ( $news_query->have_posts() ) : while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
	<div class="post">
	<h2><?php the_title(); ?></h2>
	<?php the_content();
		if (in_category('Schedule')) {
			$myEvent = get_group('Event'); // use the Custom Group name
			foreach($myEvent as $event){ ?>
			<p>
				<?php echo $event['date'][1];?>, <b><?php echo $event['location'][1]; ?></b>&nbsp;
				<?php if ($event['status'][1]) {
					echo '('.$event['status'][1].')';
				} ?><br />
				<?php echo $event['note'][1]; ?>
			</p>
			<?php }
		} ?>
	</div>
	
	<?php
	endwhile;
	endif;
	
	wp_reset_query();
	?>
</div>
<?php get_footer(); ?>
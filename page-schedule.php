<?
/*
 * Template Name: Schedule
*/
?>
<?php get_header(); ?>
<div id="main">
	<?
	$schedule_query = new WP_Query('category_name=Schedule');
	
	if ( $schedule_query->have_posts() ) : while ( $schedule_query->have_posts() ) : $schedule_query->the_post(); ?>
	
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<div class="post">
	<?php $myEvent = get_group('Event'); // use the Custom Group name
	foreach($myEvent as $event){ ?>
	<p>
		<?php echo $event['date'][1];?>, <b><?php echo $event['location'][1]; ?></b>&nbsp;
		<?php if ($event['status'][1]) {
			echo '('.$event['status'][1].')';
		} ?><br />
		<?php echo $event['note'][1]; ?>
	</p>
	<?php } ?>
	</div>
	
	<?php
	endwhile;
	endif;
	
	wp_reset_query();
	?>
</div>
<?php get_footer(); ?>
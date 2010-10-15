<?
/*
 * Template Name: Results
*/
?>
<?php get_header(); ?>
<div id="main">
	<?
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); /*
		$thisEvent = get_group('Event'); // use the Custom Group name
		foreach($thisEvent as $event) {
			if ($event['results']) { */?>
		<!-- <p> -->
			<!-- <?php // echo $event['date'][1];?>, <b><?php // echo $event['location'][1]; ?></b><br /> -->
			<!-- <a href="<?php // echo $event[''][1]; ?>">Results</a> -->
		<!-- </p> -->
		<?php //} } ?>
	
	<?php
	endwhile;
	endif;
	
	wp_reset_query();
	?>
</div>
<?php get_footer(); ?>
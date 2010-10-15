<?php get_header(); ?>
		  <div id="main">	
				<!-- <div class="countdown" style="display:none;">
					<h4>Huntington countdown</h4>
					The IOA's 2010 racing season kicks off on June 5.<br />
					<div class="counterbox">
						<script language="JavaScript" src="http://in-info-web4.informatics.iupui.edu/~patproct/n355/project/scripts/countdown.js"></script>
					</div>
				</div> -->
				<?php
				$home_query = new WP_Query('category_name=Front Page');
				
				if ( $home_query->have_posts() ) : while ( $home_query->have_posts() ) : $home_query->the_post();
				?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2> <!-- <?php the_time('F jS, Y')?> -->
					<?php
					the_content();
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
					}
					?>
				</div>
				<?php
				endwhile;
				endif;
				
				wp_reset_query();
				?>
			</div>
<?php get_footer(); ?>
<?php get_header(); ?>
	<section id="content">
			<div id="container" class="wrap">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="boxes">
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<div class="col-lg-4 col-md-4 col-sm-4 box">
								<div class="opp">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
									<div class="tekst">
										<?php the_content();?>
									</div>
								</div>
								<img class="hidden-xs" src="<?php $thumb = get_post_custom_values('post-image'); echo $thumb[0];?>" alt="<?php the_title();?>">
							</div>
							<?php endwhile;?>
							<?php else :?>
							<p>Not sure what you're looking for</p>
							<?php endif;?>
							<div id="morePrev">
								<?php next_posts_link('More ...');?>
								<?php previous_posts_link();?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
<?php get_footer();?>
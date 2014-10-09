<?php get_header(); ?>
<section id="content">
	<div id="container" class="wrap">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="post">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
						<img class="post-image" src="<?php $thumb = get_post_custom_values('post-image'); echo $thumb[0];?>" alt="<?php the_title();?>">
					</div>
					<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
						<div class="tekst">
							<?php the_content();?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<?php else :?>
		<p>Not sure what you're looking for</p>
		<?php endif;?>			
		<div id="comments_template">
			<?php comments_template();?>
		</div>
	</div>
<?php get_footer();?>
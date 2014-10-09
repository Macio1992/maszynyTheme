<?php get_header(); ?>
<section id="content">
	<div id="container" class="wrap">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="row post">
				<?php if (!is_page(14)) {?>
				<div class="col-lg-9 col-md-8 col-sm-9 col-xs-12">
						<h2>
							<a href="<?php the_permalink(); ?>">
								<?php the_title();?>
							</a>
						</h2>
						<div id="tekstPage">
							<?php the_content();?>
						</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-3 col-xs-12" id="czesci">
						<h4>DOSTARCZAMY CZĘŚCI ZAMIENNE</h4>
						<ul>
							<li><a href="#">KOMATSU</a></li>
							<li><a href="#">DOOSAN</a></li>
							<li><a href="#">KOMATSU</a></li>
							<li><a href="#">CATERPILLAR</a></li>
							<li><a href="#">VOLVO</a></li>
							<li><a href="#">ATLAS</a></li>
							<li><a href="#">SANDVIK</a></li>
							<li><a href="#">EXTEC</a></li>
						</ul>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-1.png" alt="" />
						<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-2.png" alt="" />
						<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-3.png" alt="" />
						<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-4.png" alt="" />
						<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-5.png" alt="" />
						<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-6.png" alt="" />
					</div>
				</div>
				<?php } else {?>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<h2>
							<a href="<?php the_permalink(); ?>">
								<?php the_title();?>
							</a>
						</h2>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d578.9138648972439!2d18.539876683555953!3d54.521937434633685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fda72680ebf1f5%3A0x76d54e58df31755e!2sStarowiejska+43%2C+Gdynia!5e0!3m2!1spl!2spl!4v1412776949494" width="600" height="450" frameborder="0" style="border:0">
						</iframe>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
						<p id="kontakt">
							<b>
								AHA STUDIO<br>
								ANNA HETMAŃSKA<br><br>
							</b>
							ul. Garbary 28/8
							61-868 Poznań
							NIP: 778-134-57-07<br><br>

							tel. 882 121 288
							<a style="color: #333333;" href="#">biuro@czescidomaszyn.com</a>
						</p>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" id="inputs">
						<div class="row">
							<div class="col-lg-12">
								<div>
									<input class="contactinput" type="text" value="Imię:" />
									<input class="contactinput" value="Email:"/>
									<input class="contactinput" value="Telefon:"/>
									<textarea class="contactinput" value="Wiadomość"></textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<div>
									<input class="btn btn-send" value="Wyślij" type="submit" id="wyslij">
									<input class="btn btn-default" value="Wyczyść" type="reset" id="wyczysc">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-1.png" alt="" />
							<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-2.png" alt="" />
							<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-3.png" alt="" />
							<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-4.png" alt="" />
							<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-5.png" alt="" />
							<img class="pictures" src="<?php bloginfo('template_url'); ?>/img/partner-6.png" alt="" />
						</div>
					</div>
				<?php }?>
			</div>
		
		<?php endwhile;?>
		<?php else :?>
		<p> Not sure what you're looking for </p>
		<?php endif;?>
	</div>
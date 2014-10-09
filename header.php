<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="keywords" content=""/>
	<meta name="description" content="" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" type ="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" type ="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/script.js"></script>
</head>
<?php echo is_single() ? "<body class='single'>" : "<body>"; ?>
	<header>
		<div id="header" class="wrap">
			<a href="<?php bloginfo('url');?>">
				<img id="kolka-1" src="<?php bloginfo('template_url');?>/img/kolka-1.png" alt="kolka-1">
				<img id="kolka-2" src="<?php bloginfo('template_url');?>/img/kolka-2.png" alt="kolka-2">
			</a>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#macio">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					</div>
					<div class="collapse navbar-collapse" id="macio">
						<?php wp_nav_menu( array( 'theme_location' => 'nav-menu' ) ); ?>
					</div>
				</div>
			</nav>
		</div>
	</header>
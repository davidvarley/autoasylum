<!DOCTYPE html>

<html>

<head>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<title>DV Web Design | Homepage</title>

	<meta charset="utf-8"/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>

</head>

<body>

	

	<div class="navbar navbar-inverse navbar-static-top" id="home">

			<div class="container">

				<a href="<?php echo site_url(); ?>"><img src="<?php echo get_option('home'); ?>/wp-content/themes/portfolio/img/dv.png" class="logo navbar-text" alt="Responsive image"></a>

				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>

				<div class="collapse navbar-collapse navHeaderCollapse">

					<ul class="nav navbar-nav navbar-right navbar-text">

				<?php wp_list_pages(array('title_li' => '', exclude =>  '9')); ?>

					</ul>


				
				</div>
			</div>
	</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
		if (is_home()) {
			$title_tag = "We race boats! ";
		} else {
			$title_tag = wp_title('',0,'')." :: ";
		}
		?>
		<title><?php echo $title_tag; bloginfo('name');?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/maillink.js"></script>
	</head>
	<body>
		
		<div id="container">
			<div id="header">
				<h1>
					<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a><br />
					<span class="subtitle"><?php bloginfo('description'); ?></span>
				</h1>
			</div>
				<div id="nav">
					<?php
						include 'scripts/menu.php';
						include 'menu.php';
					?>
				</div>
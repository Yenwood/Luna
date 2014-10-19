<?php

require ('header.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo generate_page_title($page_title, $p) ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="include/css/trent.css" />
		<link rel="stylesheet" type="text/css" href="include/css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="style/Sunrise/style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
if (!defined('FORUM_ALLOW_INDEX'))
	echo '<meta name="ROBOTS" content="NOINDEX, FOLLOW" />'."\n";
?>
	</head>
	<body>
        <div id="header">
			<div class="navbar navbar-default navbar-static-top">
				<div class="nav-inner">
					<a class="navbar-brand" href="index.php"><?php echo $menu_title ?></a>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav"><?php echo implode("\n\t\t\t\t", $links); ?></ul>
						<ul class="nav navbar-nav navbar-right">
							<?php echo $usermenu; ?>
						</ul>
					</div>
				</div>
				<?php echo $announcement; ?>
			</div>
        </div>
        <div class="container">
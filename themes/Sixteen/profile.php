<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
	exit;

?>
<div class="row">
	<div class="col-sm-3 profile-nav">
		<div class="profile-card">
			<div class="profile-card-head">
				<div class="user-avatar thumbnail">
					<?php echo $avatar_user_card; ?>
				</div>
				<h2><?php echo $user_username; ?></h2>
				<h3><?php echo $user_usertitle; ?></h3>
			</div>
			<?php load_me_nav('profile'); ?>
		</div>
	</div>
	<div class="profile col-sm-9">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<a href="profile.php?id=<?php echo $id ?>" class="navbar-brand"><span class="fa fa-fw fa-user"></span> <?php echo luna_htmlspecialchars($user['username']) ?></a>
			</div>
		</nav>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php _e('About user', 'luna') ?></h3>
			</div>
			<div class="panel-body">
				<?php echo implode("\n\t\t\t\t\t\t\t".'<br />', $user_personality)."\n" ?>
			</div>
		</div>
	<?php if (!empty($user_messaging)): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php _e('Contact', 'luna'); ?></h3>
			</div>
			<div class="panel-body">
				<p><?php echo implode("\n\t\t\t\t\t\t\t".'<br />', $user_messaging)."\n" ?></p>
			</div>
		</div>
	<?php
	endif;
	
	if ($luna_config['o_signatures'] == '1') {
		if (isset($parsed_signature)) {
	?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php _e('Signature', 'luna'); ?></h3>
			</div>
			<div class="panel-body">
				<?php echo $user_signature ?>
			</div>
		</div>
	<?php
		}
	}
	?>
	</div>
</div>
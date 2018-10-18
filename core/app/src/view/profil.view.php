<?php $title = 'profil'; ?>


<?php ob_start(); ?>

<h1><?= $titleH1; ?></h1>

<p><?= $describe; ?></p>

<div class="gridY">
	<div id="info_user" class="contentBlock">
		<ul>
		<?php
		foreach ($user as $key => $value) {
			if($key =='pseudo' || $key =='email'){
				echo '<li>'.$key.' : '.$value.'</li>';
			}
			
		}
		?>
		</ul>
	</div>
	<div id="info_user_complete" class="contentBlock">
		<ul>
		<?php
		foreach ($user_info as $key => $value) {
			echo '<li>'.$key.' : '.$value.'</li>';
		}
		?>
		</ul>
	</div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('templates/default.php'); ?>
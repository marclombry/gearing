<?php $title = 'profil'; ?>


<?php ob_start(); ?>

<h1><?= $titleH1; ?></h1>

<p><?= $describe; ?></p>

<main>
	<?php
	foreach ($user as $key => $value) {
		echo '<li>'.$key.' : '.$value.'</li>';
	}
	?>
</main>

<?php $content = ob_get_clean(); ?>


<?php require('templates/default.php'); ?>
<?php $title = 'Home'; ?>


<?php ob_start(); ?>

<h1><?= $titleH1; ?></h1>

<p><?= $describe; ?></p>




<?php $content = ob_get_clean(); ?>


<?php require('templates/default.php'); ?>
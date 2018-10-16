<?php $title = 'login'; ?>


<?php ob_start(); ?>

<h1><?= $titleH1; ?></h1>

<p><?= $describe; ?></p>
<?php require'../src/view/partials/formular.view.php' ;?>

<div id="messa"></div>

<?php $content = ob_get_clean(); ?>


<?php require('templates/default.php'); ?>
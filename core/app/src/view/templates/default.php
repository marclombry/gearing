<?php require '../src/view/partials/nav.view.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="gearing framework">
	    <meta name="author" content="marc lombry">
	    <link rel="icon" href="../../favicon.ico">

        <title><?= $title ?></title>

        <link href="style.css" rel="stylesheet" /> 
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link rel="stylesheet" href="http://localhost/<?= strtolower($titleApp); ?>/core/app/public/css/restart.css">
	    <link rel="stylesheet" href="http://localhost/<?= strtolower($titleApp); ?>/core/app/public/css/engrenage.css">
	    <link rel="stylesheet" href="http://localhost/<?= strtolower($titleApp); ?>/core/app/public/css/common.css">
	    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.0beta/css/icofont.css" integrity="sha384-+iJF6xK4xnr+UBchttOu5eVXU3O/+WiateNu6D76ixKwFPrlm5NkgTnAR35tgjMU" crossorigin="anonymous">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <style>
    		nav{margin:0px 0px 20px 0px;}
    		#content{margin-top: 100px;}
      		form{margin: 100px 10px 10px 10px;}
    	</style>
    </head>

        

    <body>
        <?= $content ?>

<?php require '../src/view/partials/footer.view.php';?>
<?php use core\app\classes\Form;?>
<?php $title = 'profil'; ?>


<?php ob_start(); ?>

<h1><?= $titleH1; ?></h1>

<p><?= $describe; ?></p>

<div class="gridY">
	<div id="info_user" class="contentBlock">
		<h3>Modifier mes information</h3>
		<?php
		echo "<form method='post'>";
		echo Form::input('text','pseudo','Votre pseudo');
		echo Form::input('email','email','Votre email');
		echo Form::input('text','picture','Votre avatar');
		echo Form::input('text','adresse','Votre adresse');
		echo Form::input('text','cp','Votre code postal');
		echo Form::input('text','city','Votre ville');
		echo Form::input('text','phone','Votre mobile');
		echo '</form>';
		
		
		?>
		
		
	</div>
	<div id="info_user_complete" class="contentBlock">
		<ul>
		<?php
		if($_SESSION['auth']){
			foreach ($user as $key => $value) {
				if($key =='pseudo' || $key =='email'){
					echo '<li>'.ucfirst($key).' : '.$value.'</li>';
				}	
			}
		}

		if(is_array($user_info)){
			foreach ($user_info as $key => $value) {
				if($key ==='picture' || $key ==='adresse' || $key ==='cp' || $key ==='city' || $key === 'phone'){
					echo '<li>'.ucfirst($key).' : '.$value.'</li>';
				}	
			}
		}else {
			
		}
		
		?>
		</ul>
	</div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('templates/default.php'); ?>
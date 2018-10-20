<?php 
	use core\app\classes\Form;
	use core\app\classes\FormFilter;
?>
<?php $title = 'profil'; ?>


<?php ob_start(); ?>

<h1><?= $titleH1; ?></h1>

<p><?= $describe; ?></p>

<div class="gridY">
	<div id="info_user" class="contentBlock">
		<h3>Modifier mes information</h3>
		<?php
		echo "<form method='post' enctype='multipart/form-data'>";
		echo '<lable for="pseudo">Pseudo : </label><p>'.Form::input('text','pseudo','Votre pseudo').'</p>';
		echo '<lable for="email">Email : </label><p>'.Form::input('email','email','Votre email').'</p>';
		echo '<lable for="picture">Avatar : </label><p>'.Form::input('file','picture','Votre avatar').'</p>';
		echo '<lable for="adresse">Adresse : </label><p>'.Form::input('text','adresse','Votre adresse').'</p>';
		echo '<lable for="cp">Code postal : </label><p>'.Form::input('text','cp','Votre code postal').'</p>';
		echo '<lable for="city">Ville : </label><p>'.Form::input('text','city','Votre ville').'</p>';
		echo '<lable for="phone"> Mobile : </label><p>'.Form::input('text','phone','Votre mobile').'</p>';
		echo '<input type="submit" ,name="addinfo" id="addinfo" value="confirmer">';
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
		}
		
		?>
		</ul>
		<div id='retour'></div>
		
	</div>
</div>

<script>
	/*
	let info = document.getElementById('addinfo');
	info.addEventListener('submit',subinfo(function(e){
		e.preventDefault();
	}));
	function subinfo(e){

		
		let xhr = new XMLHttpRequest();
		xhr.open('GET','http://localhost/gearing/core/app/src/formprofil.php',true);
		
		xhr.onreadystatechange = function() {
			if(xhr.readyState == 4) alert(xhr.responseText);
			let resp = xhr.responseText;
			console.log(xhr.responseText);
			document.getElementById('retour').innerHTML = resp;
		}
		xhr.send();
		
	}

	*/
</script>
<?php $content = ob_get_clean(); ?>


<?php require('templates/default.php'); ?>
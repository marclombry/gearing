<?php
use core\app\classes\Form;
echo '<form id="formular" method="post" action="">';

	echo '<p>'.Form::input('text','pseudo','Pseudo').'</p>';
	echo '<p>'.Form::input('text','email','Email').'</p>';
	echo '<p>'.Form::input('text','password','Password').'</p>';
	echo '<p>'.Form::input('text','secret','Secret').'</p>';
	echo '<p><input type="hidden" id="token" name="token" value="ddd"></p>';
	echo '<input type="submit" value ="se connecter" name="connecte" id="connecte">';


echo '</form>';
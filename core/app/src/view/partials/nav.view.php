<div class="restarter">
 <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?= 'Gearing';?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php
              if(!isset($_SESSION['auth']) || empty($_SESSION)){
                echo '<li><a href="login">Se connecter</a></li>';
                echo '<li><a href="register">Inscription</a></li>';
              }else{
               // echo '<li><a href="admin">Administration</a></li>';
                echo '<li><a href="deco">deco</a></li>';
                echo '<li><a href="profil"><span class="glyphicon glyphicon-user"></span> '.$_SESSION['auth']['pseudo'].'</a></li>';
               
              }
            ?>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div>
  <div id="logo"><img src="images/logo.jpg" /></div>

 
   <div class="barree">
     <ul id="nav">

			<li><a href="index2.php">Accueil</a>
			</li>
			<li><a href="cours.php">Cours</a></li>
			<li><a href="poster.php">Poster un cours</a></li>
			<li><a href="">Forums</a></li>
			<li><a href="">Chat</a></li>
			<li><a href="profil.php?id=<?php echo $valeur;?>">Profil</a></li>
			<li><a href="deconnexion.php">Deconnexion</a></li>

			
			</ul>
			<p class="pseudo">Bienvenue <b><?php echo $_SESSION['pseudo']; ?></b></p>
			<div class="roundedImage">
 <center> <img src="images/avatar.png" /></center>
 </div>
   </div>
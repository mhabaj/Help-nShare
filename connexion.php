<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['formconnexion'])) {
   $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($pseudoconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ? AND motdepasse = ?");
      $requser->execute(array($pseudoconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: Contenu/TDB.php");
      } else {
         $erreur = "Mauvais pseudo ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent etre completes !";
   }
}
?>
<?php include("includes/hautSign.php");?>
	 
	 <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Help'N'Share</a>
        </div>
	</div>

  
   
   <div class="main">
      
      
		<h2 class="titre"> Connectez vous:   </h2>
		 
         <form method="POST" action="">
		<div class="lable-2">
		
            <input type="pseudo" name="pseudoconnect" class="text"  placeholder="Pseudo" /></br></Br>
		 
			 
		
            <input type="password" name="mdpconnect" class="text" placeholder="Mot de passe" />
			 
		</div>
           <div class="submit">
            <input type="submit" class="submit" name="formconnexion" value="Connexion" />
			</div>
			
		
         </form>
		 <a href="inscription.php">Pas encore inscrit ?</A>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      
	</div>
 
 <?php include("includes/footer.php");?>

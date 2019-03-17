<?php include("../includes/headInterface.php");?>

<body>
<div class="header">
		<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         <aside class="sidebar-left">

			<a class="company-logo" href="#">Help'N'Share</a>
			<div class="options">
			<a href='../deconnexion.php'> <button type="button"  class="btn btn-xs btn-danger deco">Se déconnecter</button> </a>
				
				
				
			</div>
			<div class="sidebar-links">
				<a class="link-yellow " href="TDB.php"><i class="fa fa-compass "></i>Tableau De Bord</a>
				<a class="link-red selected" href="Profile.php"><i class="fa fa-magic"></i>Profile	</a>
				
				<a class="link-blue" href="Chat.php"><i class=" fa fa-rss"></i>Chat</a>
				<a class="link-green" href="Forum.php"><i class=" fa fa-users"></i>Forum</a>
			</div>
			
			
			
		</aside>
       </div>
	   </div>
	</div>
	</div>
	
<!------------------------------------------------------------------------------->	
	
	<?php
	


$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');
if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: Profile.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location:Profile.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location:Profile.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
   $valeur = $_SESSION['id'];
?>



   <div class="corps2">

      <div >
         <h1>Edition de mon profil:</h1>
		 <p> Ne modifiez pas les cases que vous ne comptez pas changer (dont le mot de passe) </p>
         <div > <br>
            <form method="POST" action="" enctype="multipart/form-data">
               <h3>-Vos informations personnelles:</h3>
			   <label>Pseudo :</label>
               <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" /><br /><br />
               <br><label>Mail :</label>
               <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" /><br /><br />
              <br> <br> <h3> -Modifier le mot de passe: </h3>
			   <label>Mot de passe :</label>
               <input type="password" name="newmdp1" placeholder="Mot de passe"/><br /><br />
               <label>Confirmation - mot de passe :</label>
               <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />
               <div align="center">
			   <input type="submit"  value="Mettre a jour mon profil !" />
			   </div>
            
			</form>
            <?php if(isset($msg)) { echo $msg; } ?>
			<a href="Profile.php?id=<?php echo $valeur;?>">Retour</a>
	

      </div>
	  </div>
  

<?php   
}
else {
   header("Location: ../connexion.php");
}
?>





	
</body>
</html>
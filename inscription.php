<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien ete cree ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
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

     <p class="titre"> Inscription:   </p>
       

	   <form method="POST" action="">
           
            <div class="lable-2">        
                 
                     <input type="text" placeholder="Votre pseudo" class="text" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                 
                 
                   
                     <input type="email" placeholder="Votre mail" class="text" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  
                 
                     <input type="email" placeholder="Confirmez votre mail" class="text" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
              
                     <input type="password" placeholder="Votre mot de passe" class="text" name="mdp" />
               
                     <input type="password" placeholder="Confirmez votre mdp" class="text" name="mdp2" />
            </div>
			<div class="submit">
                     <input type="submit" name="forminscription" value="Je m'inscris" />
            </div>
        

		</form>
		 <a href="connexion.php">Retour</a>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
</div>

  <?php include("includes/footer.php");?>
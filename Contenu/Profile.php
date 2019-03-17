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
				<a class="link-yellow " href="TDB.php?id=<?php echo $valeur;?>"><i class="fa fa-compass "></i>Tableau De Bord</a>
				<a class="link-red selected" href="Profile.php?id=<?php echo $valeur;?>"><i class="fa fa-magic"></i>Profile	</a>
				
				<a class="link-blue" href="Chat.php?id=<?php echo $valeur;?>"><i class=" fa fa-rss"></i>Chat</a>
				<a class="link-green" href="Forum.php?id=<?php echo $valeur;?>"><i class=" fa fa-users"></i>Forum</a>
			</div>
			
			
			
		</aside>
       </div>
	   </div>
	</div>
	</div>
	
	
	
	





 <div class="corps2">

      <div >  
         <h2>Votre Profil:</h2>
         <br /><br />
         <p class="donnee">Pseudo : <?php echo $_SESSION['pseudo']; ?> </p>
         <br />
        <p class="donnee"> Mail : <?php echo $_SESSION['mail']; ?> </p>
         <br />
		
         <br />
		 <a href='editionprofil.php?id=<?php echo $valeur;?>'> <button type="button"  class="btn btn-xs btn-info ">Editer mon profil et/ou MDP</button> </a>

        
		 <p>(P.S:Si vous éditez votre profil, il est impératif de vous déconnecter et vous reconnecter pour voir vos modifications apparaitre) </p>
	
</body>
</html>
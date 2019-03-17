
<?php include("../includes/headcours.php");?>
<body>
 
	
	<div class="header">
		<div class="container-fluid">
      <div class="row">
        <div class="sidebar">
         <aside class="sidebar-left">

			<a class="company-logo" href="#">Help'N'Share</a>
			<div class="options">
			<a href='../deconnexion.php?id=<?php echo $valeur;?>'> <button type="button"  class="btn btn-xs btn-danger deco">Se déconnecter</button> </a>

			
				
				
				
			</div>
			<div class="sidebar-links">
				<a class="link-yellow selected" href="../Contenu/TDB.php?id=<?php echo $valeur;?>"><i class="fa fa-compass "></i>Tableau De Bord</a>
				<a class="link-red " href="../Contenu/Profile.php?id=<?php echo $valeur;?>"><i class="fa fa-magic"></i>Profile	</a>
				
				<a class="link-blue" href="../Contenu/Chat.php?id=<?php echo $valeur;?>"><i class=" fa fa-rss"></i>Chat</a>
				<a class="link-green" href="../Contenu/Forum.php?id=<?php echo $valeur;?>"><i class=" fa fa-users"></i>Forum</a>
			</div>
			
			
			
		</aside>
       </div>
	   </div>
	</div>
	</div>
		<!--------------------------------------------------->
	

	
	
<div class= "profile">

	<p class="pseudo">Bienvenue <b><?php echo $_SESSION['pseudo']; ?></b>!</p>

	<div class="roundedImage">
		<img  src="../images/avatar.png" />
	</div>

</div>


  
	 <div class="corps2">	 		<button><a href="poster.php">Poster un cours</a></button>

	<h2>PHYSIQUE</h2>
	<p>Il y a actuellement 0 disponibles . </p>
     </Div>
		
		
    
   


   
	
	
</body>
</html>

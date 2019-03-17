<?php include("../includes/headInterface.php");?>

 
	<body>
	<div class="header">
		<div class="container-fluid">
      <div class="row">
        <div class="sidebar">
         <aside class="sidebar-left">

			<a class="company-logo" href="#">Help'N'Share</a>
			<div class="options">
			<a href='../deconnexion.php'> <button type="button"  class="btn btn-xs btn-danger deco">Se déconnecter</button> </a>

			
				
				
				
			</div>
			<div class="sidebar-links">
				<a class="link-yellow selected" href="TDB.php?id=<?php echo $valeur;?>"><i class="fa fa-compass "></i>Tableau De Bord</a>
				<a class="link-red " href="Profile.php?id=<?php echo $valeur;?>"><i class="fa fa-magic"></i>Profile	</a>
				
				<a class="link-blue" href="Chat.php?id=<?php echo $valeur;?>"><i class=" fa fa-rss"></i>Chat</a>
				<a class="link-green" href="Forum.php?id=<?php echo $valeur;?>"><i class=" fa fa-users"></i>Forum</a>
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
		<img src="../images/avatar.png" />
	</div>

</div>


   <div class="corps2">
   		
	 

	<h2>Les cours de la communauté:	</h2>
		 <div class="cours">		
				<a href="../matieres/math.php?id=<?php echo $valeur;?>"><img class="img resize" src="../images/math.jpg"/></a>	
				<a href="../matieres/phys.php?id=<?php echo $valeur;?>"><img class="img resize"src="../images/phys.jpg"/>	</a>
				<a href="../matieres/svt.php?id=<?php echo $valeur;?>"><img class="img resize"src="../images/svt.jpg"/>	</a>
				<a href="../matieres/anglais.php?id=<?php echo $valeur;?>"><img class="img resize"src="../images/anglais.jpg"/></br></a>
				
				
		</div>
		<div class="cours">		
				
			
				<a href="../matieres/histoire.php?id=<?php echo $valeur;?>">	<img class="img resize"src="../images/histoire.jpg"/></a>
				<a href="../matieres/geo.php?id=<?php echo $valeur;?>">	<img class="img resize"src="../images/geo.jpg"/></a>
				<a href="../matieres/philo.php?id=<?php echo $valeur;?>">	<img class="img resize"src="../images/philo.jpg"/></a>
				<a href="../matieres/esp.php?id=<?php echo $valeur;?>">	<img class="img resize"src="../images/esp.jpg"/></a>
		</div>
     </div>
		
    
   


   
	

</body>
</html>

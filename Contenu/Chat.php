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
				<a class="link-red " href="Profile.php"><i class="fa fa-magic"></i>Profile	</a>
				
				<a class="link-blue selected" href="Chat.php"><i class=" fa fa-rss"></i>Chat</a>
				<a class="link-green" href="Forum.php"><i class=" fa fa-users"></i>Forum</a>
			</div>
			
			
			
		</aside>
       </div>
	   </div>
	</div>
	</div>
		<!--/container-->
		<div class= "profile">

	<p class="pseudo">Bienvenue <b><?php echo $_SESSION['pseudo']; ?></b>!</p>

	<div class="roundedImage">
		<img src="../images/avatar.png" />
	</div>

</div>
<!--/.container-->
    
    
	
	


<script src="https://chatwee-api.com/v2/script/590515e1bd616d805071b034.js"></script>

</body>
</html>

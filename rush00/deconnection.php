<html>
  <meta	http-equiv="Content-Type" content="text/html; chaset=UTF-8">
  <link rel="stylesheet" type="text/css" href="css/home.css" />
  <link rel="stylesheet" type="text/css" href="css/base.css" />
  <head>
	<div class="top-box">
	  <div>
		<a class="lien" href="http://localhost:8081/rush00/deconnection.php">deconnection</a></BR>
        <a class="lien" href="http://localhost:8081/rush00/admin.php">admin</a>
	  </div>
      <title>Barakouda Music</title>
	  <div id="title">Barakouda Music</div>
	  <div class="panier">
		<a href="http://localhost:8081/rush00/panier.php" class="lien">
		  <img class="panier" src="sources/panier.png" alt="panier"  title="panier" />
		</a>
	  </div>
	  <div id="connexion">
		<a href="http://localhost:8081/rush00/connection.php">Connexion</a>
	  </div>
	  <div id="creat-account">
		<a class="lien" href="http://localhost:8081/rush00/creat_account.php">creat account</a>
	  </div>
	  <div>
		<a href="http://localhost:8081/rush00/index.php" class="lien">
		  <img src="sources/home.png" alt="home" title="home" />
		</a>
	  </div>
	</div>
  </head>
  <body>
	<div class="left-box">
      <div class="left">
		<a href="http://localhost:8081/rush00/index.php">french rap</a>
	  </div>
	  <hr></hr>
	  <div class="left">
		<a href="http://localhost:8081/rush00/index.php">rap US</a>
	  </div>
	  <hr></hr>
	  <div class="left">
		<a href="http://localhost:8081/rush00/index.php">Electro</a>
	  </div>
	  <hr></hr>
	  <div class="left">
		<a href="http://localhost:8081/rush00/index.php">Metal</a>
	  </div>
	  <hr></hr>
	  <div class="left">
		<a href="http://localhost:8081/rush00/index.php">Reggae</a>
	  </div>
	  <hr></hr>
	  <div class="left">
		<a href="http://localhost:8081/rush00/index.php">Opera</a>
	  </div>
	  <hr></hr>
	  <div class="left">
		<a href="http://localhost:8081/rush00/index.php">Classic</a>
	  </div>
	</div>
	<div class="center-box">
	  <?PHP
		 session_start();
		 if ($_SESSION['pseudo'])
		 {
				unset($_SESSION['pseudo']);
				echo "delete pseudo<BR>";
		 }
		 if ($_SESSION['id'])
		 {
				unset($_SESSION['id']);
				echo "delete id<BR>";
		 }
		 else
		 {
				echo "you re not connected ! please login on !";
		 }
	  ?>
	  <body style="font-size:12pt">
		<?php
		   if (count($errs) > 0)
		{
		echo "<ul>";
		  foreach ($errs as $champEnErreur => $erreursDuChamp)
		  {
		  foreach ($erreursDuChamp as $erreur)
		  {
		  echo "<li>".$erreur."</li>";
		  }
		  }
		  echo "</ul>";
		}
		?>
	</div>
  </body>
</html>

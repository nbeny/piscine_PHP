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
		  <img class="panier" src="sources/panier.png" alt="panier"  title="panier"></img>
		</a>
	  </div>
	  <div id="connexion">
		<a href="http://localhost:8081/rush00/connection.php">Connexion</a>
	  </div>
	  <div id="creat-account">
		<a class="lien" href="http://local:8081/rush00/creat_account.php">Creat account</a>
	  </div>
	  <div>
		<a href="http://localhost:8081/rush00/index.php" class="lien">
		  <img src="sources/home.png" alt="home" title="home">
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
		 // Create connection
		 $conn = mysqli_connect("p:127.0.0.1", "rush_admin", "rush42", "rush", "3307");
		 // Check connection
		 if (!$conn)
		 {
		 die("Connection failed: " . mysqli_connect_error());
		 }
	  $sql = "SELECT `produit`, `prix`, `id` FROM `panier` WHERE 1";
	  if (strlen($_POST["submit1"]) > 0)
	  {
				$sqli = "TRUNCATE TABLE `panier`";
				mysqli_query($conn, $sqli);
	  }
	  if (strlen($_POST["submit2"]) > 0)
	  {
				if ($_SESSION['id'] && $_SESSION['pseudo'])
					echo "id : " . $_SESSION['id'] . " - pseudo : " . $_SESSION['pseudo'] . "</BR>";
	  }
	  $result = mysqli_query($conn, $sql);
	  if (mysqli_num_rows($result) > 0)
	  {
      // output data of each row
      while($row = mysqli_fetch_assoc($result))
	  {
		echo "id: " . $row["id"] . " - article: " . $row["produit"]. " - prix: ". $row["prix"] . "</BR>";
	  }
	  }
	  mysqli_close($conn);
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
		<form method="post">
		  <input type="submit" name="submit1" value="clean panier" />
		  <input type="submit" name="submit2" value="passer au payment" />
		</form>
	</div>
  </body>
</html>

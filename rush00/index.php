<html>
  <meta http-equiv="Content-Type" content="text/html; chaset=UTF-8">
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
	  <div class="home">
		<a href="http://localhost:8081/rush00/index.php">
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
	  <center>
		<table>
		  <tr>
			<td class="build">
			  <img class="build" src="sources/B2oba/Front.jpg" alt="Booba" title="Booba" />
			</td>
			<td class="build">
			  <img class="build" src="sources/alborosie/Front3.jpg" alt="Alborosie" title="Alborosie" />
			</td>
		  </tr>
				<?PHP
				   $conn = mysqli_connect("p:127.0.0.1", "rush_admin", "rush42", "rush", "3307");
				   if (!$conn)
				   {
						die("Connection failed: " . mysqli_connect_error());
				   }
				   if (strlen($_POST["submit1"]) > 0)
				   {
						$sql = "INSERT INTO `panier` (`produit`, `prix`)
						VALUES ('Booba', '15')";
						if (mysqli_query($conn, $sql))
						{
								echo "le produit a ete ajoute au panier !";
						}
				   }
				   if (strlen($_POST["submit2"]) > 0)
				   {
						$sql = "INSERT INTO `panier` (`produit`, `prix`)
						VALUES ('Alborosie', '15')";
						if (mysqli_query($conn, $sql))
						{
								echo "le produit a ete ajoute au panier !";
						}
				   }
				   mysqli_close($conn);
				?>
				<form method="post">
				  <tr>
					<td class="build-name">
					  Album Booba
					  <input type="submit" name="submit1" value="Ajouter au panier">
					</td>
					<td class="build-name">
					  Album Alborosie
					  <input type="submit" name="submit2" value="Ajouter au panier">
					</td>
				  </tr>
				</form>
		</table>
	  </center>
	</div>
  </body>
</html>

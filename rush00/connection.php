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
$errs = array();
$pseudo= "";
$mdp="";

session_start();
// Create connection
$conn = mysqli_connect("p:127.0.0.1", "rush_admin", "rush42", "rush", "3307");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (strlen($_POST["submit"]) > 0)
{
	  $pseudo = stripSlashes($_POST["pseudo"]);
	  $mdp = stripSlashes($_POST["mdp"]);
	  $sql = "SELECT `id`, `nom`, `prenom`, `mdp`, `pseudo`, `email` FROM `client` WHERE 1";
	  $sql_admin = "SELECT `id`, nom, `prenom`, `email`, `pseudo`, `mdp` FROM `admin` WHERE 1";
	  $result = mysqli_query($conn, $sql);
	  $result_admin = mysqli_query($conn, $sql_admin);
	  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result))
	  {
		if ($pseudo == $row["pseudo"] && $mdp == $row["mdp"])
		{
				echo "id: " . $row["id"]. " - Name: " . $row["nom"]. " " . $row["prenom"]. "<br>";
				$_SESSION['pseudo'] = $row["pseudo"];
				$_SESSION['id'] = $row["id"];
		}
      }
	  }
	  if (mysqli_num_rows($result_admin) > 0)
	  {
		while ($wor = mysqli_fetch_assoc($result_admin))
		{
				if ($pseudo == $wor["pseudo"] && $mdp == $wor["mdp"])
				{
						echo "you re login as admin utilisateur ! be carefull !";
						$_SESSION['pseudo'] = $wor["pseudo"];
						$_SESSION['id'] = $wor["id"];
				}
		}
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
	  Pseudo:<input type="text" name="pseudo"
	  value="<?php echo htmlEntities($pseudo);?>" /><br />
	  Mot de passe: <input type="password" name="mdp" /><br />
	  <input type="submit" name="submit" value="Login" />
	</form>
	</div>
  </body>
</html>

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
$errs = array();
$nom = "";
$prenom = "";
$pseudo = "";
$email= "";

$conn = mysqli_connect("p:127.0.0.1", "rush_admin", "rush42", "rush", "3307");
if (!$conn)
{
		die("Connection failed: " . mysqli_connect_error());
}
if (strlen($_POST["submit"]) > 0)
{
      $nom = stripSlashes($_POST["nom"]);
      if (strlen($nom) == 0)
		$errs["nom"][] = "Le nom est obligatoire\n";
      if (strlen($nom) > 25)
		$errs["nom"][] = "Le nom ne doit pas exceder 25 charactere.\n";
      $prenom = stripSlashes($_POST["prenom"]);
      if (strlen($prenom) > 25)
		$errs["prenom"][] = "Le prenom ne doit pas exceder 25 charactere.\n";
      $pseudo = stripSlashes($_POST["pseudo"]);
      if (strlen($pseudo) == 0)
	  {
	      $errs["pseudo"][] = "Le pseudo est obligatoire";
      }
	  if (strlen($pseudo) > 25)
	  {
		$errs["pseudo"][] = "Le pseudo ne doit pas exceder 25 charactere.\n";
      }
      $email = stripSlashes($_POST["email"]);
      if (strlen($email) == 0)
	  {
		$errs["email"][] = "L'email est obligatoire";
      }
      $motdepasse = stripSlashes($_POST["motdepasse"]);
      $motdepasseverif = stripSlashes($_POST["motdepasseverif"]);
      if (strlen($motdepasse) == 0)
	  {
		$errs["motdepasse"][] = "Le mot de passe est obligatoire";
      }
	  else if (strlen($motdepasseverif) == 0)
	  {
		$errs["motdepasse"][] = "Le mot de passe doit etre saisi 2 fois";
      }
	  else if ($motdepasse != $motdepasseverif)
	  {
		$errs["motdepasse"][] = "Les 2 mots de passe saisis sont différents";
      }
	  else if (strlen($motdepasse) < 8)
	  {
		$errs["motdepasse"][] = "Le mot de passe doit contenir au moins 8 c.";
	  }
	 if (count($errs) == 0)
	 {
		 $sql = "INSERT INTO `client` (`nom`, `prenom`, `mdp`, `pseudo`, `email`)
		 VALUES ('$nom', '$prenom', '$motdepasse', '$pseudo', '$email')";
		if (mysqli_query($conn, $sql))
		{
            echo "New account succefully created, you may now log on";
        }
		else
		{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	    }
		die();
	 }
		mysqli_close($conn);
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
<form method="post">
Nom:					<input type="text" name="nom"
value="<?php echo htmlEntities($nom);?>" /><br />
Prenom:					<input type="text" name="prenom"
value="<?php echo htmlEntities($prenom);?>" /><br />
Pseudo:					<input type="text" name="pseudo"
value="<?php echo htmlEntities($pseudo);?>" /><br />
Email:					<input type="text" name="email" value="<?PHP echo htmlEntities($email);?>" /><br />
Mot de passe:			<input type="password" name="motdepasse" /><br />
Mot de passe (verif):	<input type="password" name="motdepasseverif" /><br />
<input type="submit" name="submit" value="Enregistrer" />
</form>
</div>
</body>
</html>

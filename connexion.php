<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM jeux_video ORDER BY id DESC');

if(isset($_GET['q']) AND !empty($_GET['q'])) {
	$q = htmlspecialchars($_GET['q']);
	$reponse = $bdd->query('SELECT nom FROM jeux_video WHERE nom LIKE "%'.$q.'%" ORDER BY id DESC');
	if($reponse->rowCount() == 0) {
		$reponse = $bdd ->query('SELECT nom FROM jeux_video WHERE concat(nom, possesseur, console, commentaires) LIKE "%'.$q.'%" ORDER BY id DESC');
	}
}

?>

<form method="GET">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
</form>

<?php if($reponse->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $reponse->fetch()) { ?>
      <li><?= $a['nom'] ?></li>
   <?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour: <?= $q ?>...
<?php } ?>
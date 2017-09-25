
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=theatre_viaduc;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT nom_capsule FROM capsules_sonores ORDER BY id DESC');

if(isset($_GET['q']) AND !empty($_GET['q'])) {
	$q = htmlspecialchars($_GET['q']);
	$reponse = $bdd->query('SELECT nom_capsule FROM capsules_sonores WHERE nom_capsule LIKE "%'.$q.'%" ORDER BY id DESC');
  //var_dump($reponse);
	if($reponse->rowCount() == 0) {
		$reponse = $bdd->query('SELECT nom_capsule FROM capsules_sonores WHERE concat(nom_capsule, intervenant, titres_pieces, auteur_piece, metteur_en_scene, acteurs, musiciens, plasticiens, regisseurs, danseurs, commentaires) LIKE "%'.$q.'%" ORDER BY id DESC');
	}
}


echo 
'<a href="index.html">acceuil</a>
<form method="GET">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Rechercher" /> 
</form>';



  if($reponse->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $reponse->fetch()) { ?>
      <li><?= $a['nom_capsule'] ?></li>
<?php 
$musique = $bdd->query('SELECT fichiers_sonores FROM capsules_sonores WHERE id=1');
$b = $musique->fetch();
//var_dump($b);
//echo $b['fichiers_sonores'];
  echo
  '<audio controls>
    <source src="'.$b['fichiers_sonores'] .'" type="audio/mpeg">
  </audio>';
   } 
  echo '</ul>';
  
 } else { ?>
Aucun résultat pour: <?= $q ?>...
<?php } ?>
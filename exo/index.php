<?php

namespace App;
require_once 'vendor/autoload.php';


// Exemple d'utilisation
$tache = new MaTache();
$tache->creerTache("Faire les courses", "Acheter du lait et du pain");
$taches = $tache->lireTaches();
print_r($taches);

$tache->mettreAJourTache($taches[0]['id'], "Faire les courses", "Acheter du lait, du pain et des œufs", "en cours");
$taches = $tache->lireTaches();
print_r($taches);

$tache->supprimerTache($taches[0]['id']);
$taches = $tache->lireTaches();
print_r($taches);
?>

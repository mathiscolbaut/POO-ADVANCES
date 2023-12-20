<?php
namespace App;
interface TacheInterface {
    public function creerTache($titre, $description);
    public function lireTaches();
    public function mettreAJourTache($id, $titre, $description, $statut);
    public function supprimerTache($id);
}
?>

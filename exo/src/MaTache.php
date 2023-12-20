<?php

namespace App;

use Exception;

class MaTache extends BaseTache {
    use StatutTache;

    public function mettreAJourTache($id, $titre, $description, $statut) {
        foreach ($this->taches as &$tache) {
            if ($tache['id'] === $id) {
                $tache['titre'] = $titre;
                $tache['description'] = $description;
                $this->setStatut($statut);
                return $tache;
            }
        }
        throw new Exception("La tâche avec l'ID $id n'existe pas.");
    }
}
?>

<?php
namespace App;

use Exception;

abstract class BaseTache implements TacheInterface {
    protected $taches = [];

    public function creerTache($titre, $description) {
        $tache = [
            'id' => uniqid(),
            'titre' => $titre,
            'description' => $description,
            'statut' => 'ouvert',
        ];

        $this->taches[] = $tache;
        
        // Utilisation de classe anonyme pour une action spéciale (notification)
        $notification = new class {
            public function notifierCreationTache($titre) {
                echo "La tâche \"$titre\" a été créée avec succès.\n";
            }
        };
        
        $notification->notifierCreationTache($titre);
        
        return $tache;
    }

    public function lireTaches() {
        return $this->taches;
    }

    public function supprimerTache($id) {
        foreach ($this->taches as $key => $tache) {
            if ($tache['id'] === $id) {
                unset($this->taches[$key]);
                return true;
            }
        }
        throw new Exception("La tâche avec l'ID $id n'existe pas.");
    }
}
?>

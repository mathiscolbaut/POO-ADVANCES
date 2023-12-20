<?php
namespace App;
trait StatutTache {
    protected $statut;

    public function getStatut() {
        return $this->statut;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }
}
?>

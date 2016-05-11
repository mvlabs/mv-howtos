<?php
namespace Istruzioni\Service;

use Istruzioni\Entity\Istruzione;

class IstruzioniService {

    private $entityManager;
    private $istruzoiniRepository;

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
        $this->istruzioniRepository = $entityManager->getRepository('Istruzioni\Entity\Istruzione');
    }

    public function getIstruzioni() {
        return $this->istruzioniRepository->findAll();
    }

    public function getIstruzione($id) {
        return $this->istruzioniRepository->find($id);
    }

    public function aggiungiNuovaIstruzione(array $dati) {
        $istruzione = new Istruzione(
            $dati['titolo'],
            $dati['autore'],
            $dati['istruzione']
        );

        $this->entityManager->persist($istruzione);
        $this->entityManager->flush();

        return $istruzione;
    }

    public function vota($idIstruzione, $voto) {
        $istruzione = $this->getIstruzione($idIstruzione);

        if ($voto == 'positivo') {
            $votoAttuale = $istruzione->getVotiPositivi();
            $istruzione->setVotiPositivi($votoAttuale + 1);
        } else {
            $votoAttuale = $istruzione->getVotiNegativi();
            $istruzione->setVotiNegativi($votoAttuale + 1);
        }

        $this->entityManager->persist($istruzione);
        $this->entityManager->flush();

        return $istruzione;
    }

}

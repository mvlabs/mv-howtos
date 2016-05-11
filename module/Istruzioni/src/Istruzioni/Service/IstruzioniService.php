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

}

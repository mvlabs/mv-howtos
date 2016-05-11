<?php

namespace Istruzioni\Entity;

use Doctrine\ORM\Mapping as ORM;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

/**
 * Istruzione
 *
 * @ORM\Table(name="istruzioni")
 * @ORM\Entity(repositoryClass="Istruzioni\Entity\Repository\IstruzioneRepository")
 */
class Istruzione
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", nullable=false)
     */
    private $titolo;

    /**
     * @var string
     *
     * @ORM\Column(name="autore", type="string", nullable=false)
     */
    private $autore;

    /**
     * @var string
     *
     * @ORM\Column(name="istruzioni", type="text", nullable=true)
     */
    private $istruzioni;

    public function __construct($titolo, $autore, $istruzioni) {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->istruzioni = $istruzioni;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return Istruzione
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set autore
     *
     * @param string $autore
     *
     * @return Istruzione
     */
    public function setAutore($autore)
    {
        $this->autore = $autore;

        return $this;
    }

    /**
     * Get autore
     *
     * @return string
     */
    public function getAutore()
    {
        return $this->autore;
    }

    /**
     * Set istruzioni
     *
     * @param string $istruzioni
     *
     * @return Istruzione
     */
    public function setIstruzioni($istruzioni)
    {
        $this->istruzioni = $istruzioni;

        return $this;
    }

    /**
     * Get istruzioni
     *
     * @return string
     */
    public function getIstruzioni()
    {
        return $this->istruzioni;
    }
}

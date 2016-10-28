<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Processo
 *
 * @ORM\Table(name="processo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProcessoRepository")
 */
class Processo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivo", type="text")
     */
    private $objetivo;

    /**
     * @var int
     *
     * @ORM\Column(name="periodicidade", type="integer")
     */
    private $periodicidade;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Processo
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set objetivo
     *
     * @param string $objetivo
     *
     * @return Processo
     */
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;

        return $this;
    }

    /**
     * Get objetivo
     *
     * @return string
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * Set periodicidade
     *
     * @param integer $periodicidade
     *
     * @return Processo
     */
    public function setPeriodicidade($periodicidade)
    {
        $this->periodicidade = $periodicidade;

        return $this;
    }

    /**
     * Get periodicidade
     *
     * @return int
     */
    public function getPeriodicidade()
    {
        return $this->periodicidade;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Processo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    public function __toString() {
        return $this->nome;
    }
}


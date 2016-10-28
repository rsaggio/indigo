<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etapa
 *
 * @ORM\Table(name="etapa")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtapaRepository")
 */
class Etapa
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
     * @var int
     *
     * @ORM\Column(name="codigoIt", type="integer")
     */
    private $codigoIt;

    /**
     * @var string
     *
     * @ORM\Column(name="interacao", type="string", length=255)
     */
    private $interacao;

    /**
     * @var string
     *
     * @ORM\Column(name="detalhes", type="text")
     */
    private $detalhes;

    /**
     * @var int
     *
     * @ORM\Column(name="tempo", type="integer")
     */
    private $tempo;

    /**
     * @var string
     *
     * @ORM\Column(name="cor", type="string", length=255)
     */
    private $cor;

    /**
     * @var string
     *
     * @ORM\Column(name="participante", type="string", length=255)
     */
    private $participante;

    /**
     * @var bool
     *
     * @ORM\Column(name="final", type="boolean")
     */
    private $final;

    /**
     * @ORM\ManyToOne(targetEntity="Departamento")
     * @ORM\JoinColumn(name="depatamento_id", referencedColumnName="id")
     */
    private $departamento;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Setor")
     * @ORM\JoinColumn(name="setor_id", referencedColumnName="id")
     */
    private $setor;

    /**
     * @ORM\ManyToOne(targetEntity="Etapa")
     * @ORM\JoinColumn(name="anterior_id", referencedColumnName="id")
     */
    private $anterior;

    /**
     * @ORM\ManyToOne(targetEntity="Processo")
     * @ORM\JoinColumn(name="processo_id", referencedColumnName="id")
     */
    private $processo;


    public function getProcesso() {
        return $this->processo;
    }

    public function setProcesso($processo) {
        $this->processo = $processo;
        return $this;
    }
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
     * @return Etapa
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
     * Set codigoIt
     *
     * @param integer $codigoIt
     *
     * @return Etapa
     */
    public function setCodigoIt($codigoIt)
    {
        $this->codigoIt = $codigoIt;

        return $this;
    }

    /**
     * Get codigoIt
     *
     * @return int
     */
    public function getCodigoIt()
    {
        return $this->codigoIt;
    }

    /**
     * Set interacao
     *
     * @param string $interacao
     *
     * @return Etapa
     */
    public function setInteracao($interacao)
    {
        $this->interacao = $interacao;

        return $this;
    }

    /**
     * Get interacao
     *
     * @return string
     */
    public function getInteracao()
    {
        return $this->interacao;
    }

    /**
     * Set detalhes
     *
     * @param string $detalhes
     *
     * @return Etapa
     */
    public function setDetalhes($detalhes)
    {
        $this->detalhes = $detalhes;

        return $this;
    }

    /**
     * Get detalhes
     *
     * @return string
     */
    public function getDetalhes()
    {
        return $this->detalhes;
    }

    /**
     * Set tempo
     *
     * @param integer $tempo
     *
     * @return Etapa
     */
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;

        return $this;
    }

    /**
     * Get tempo
     *
     * @return int
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Set cor
     *
     * @param string $cor
     *
     * @return Etapa
     */
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get cor
     *
     * @return string
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set participante
     *
     * @param string $participante
     *
     * @return Etapa
     */
    public function setParticipante($participante)
    {
        $this->participante = $participante;

        return $this;
    }

    /**
     * Get participante
     *
     * @return string
     */
    public function getParticipante()
    {
        return $this->participante;
    }

    /**
     * Set final
     *
     * @param boolean $final
     *
     * @return Etapa
     */
    public function setFinal($final)
    {
        $this->final = $final;

        return $this;
    }

    /**
     * Get final
     *
     * @return bool
     */
    public function getFinal()
    {
        return $this->final;
    }

    /**
     * Set departamento
     *
     * @param \stdClass $departamento
     *
     * @return Etapa
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \stdClass
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set setor
     *
     * @param \stdClass $setor
     *
     * @return Etapa
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get setor
     *
     * @return \stdClass
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set anterior
     *
     * @param \stdClass $anterior
     *
     * @return Etapa
     */
    public function setAnterior($anterior)
    {
        $this->anterior = $anterior;

        return $this;
    }

    /**
     * Get anterior
     *
     * @return \stdClass
     */
    public function getAnterior()
    {
        return $this->anterior;
    }
}


<?php

namespace App\Entity;

use App\Repository\CombinadoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CombinadoRepository::class)
 */
class Combinado
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Departamento;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Campus;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Codigo_Asignatura;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nrc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Status;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $HI;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $HF;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $L;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $M;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $I;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $J;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $V;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Hora_Dia;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Num_Dias;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Horas;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Tipo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Periodo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Observacion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Area_Conocimiento;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Num_Est;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepartamento(): ?string
    {
        return $this->Departamento;
    }

    public function setDepartamento(string $Departamento): self
    {
        $this->Departamento = $Departamento;

        return $this;
    }

    public function getCampus(): ?string
    {
        return $this->Campus;
    }

    public function setCampus(string $Campus): self
    {
        $this->Campus = $Campus;

        return $this;
    }

    public function getCodigoAsignatura(): ?string
    {
        return $this->Codigo_Asignatura;
    }

    public function setCodigoAsignatura(string $Codigo_Asignatura): self
    {
        $this->Codigo_Asignatura = $Codigo_Asignatura;

        return $this;
    }

    public function getNrc(): ?string
    {
        return $this->Nrc;
    }

    public function setNrc(string $Nrc): self
    {
        $this->Nrc = $Nrc;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(string $Status): self
    {
        $this->Status = $Status;

        return $this;
    }


    public function getHI(): ?string
    {
        return $this->HI;
    }

    public function setHI(string $HI): self
    {
        $this->HI = $HI;

        return $this;
    }

    public function getHF(): ?string
    {
        return $this->HF;
    }

    public function setHF(string $HF): self
    {
        $this->HF = $HF;

        return $this;
    }

    public function getL(): ?string
    {
        return $this->L;
    }

    public function setL(string $L): self
    {
        $this->L = $L;

        return $this;
    }

    public function getM(): ?string
    {
        return $this->M;
    }

    public function setM(string $M): self
    {
        $this->M = $M;

        return $this;
    }

    public function getI(): ?string
    {
        return $this->I;
    }

    public function setI(string $I): self
    {
        $this->I = $I;

        return $this;
    }

    public function getJ(): ?string
    {
        return $this->J;
    }

    public function setJ(string $J): self
    {
        $this->J = $J;

        return $this;
    }

    public function getV(): ?string
    {
        return $this->V;
    }

    public function setV(string $V): self
    {
        $this->V = $V;

        return $this;
    }

    public function getHoraDia(): ?string
    {
        return $this->Hora_Dia;
    }

    public function setHoraDia(string $Hora_Dia): self
    {
        $this->Hora_Dia = $Hora_Dia;

        return $this;
    }

    public function getNumDias(): ?string
    {
        return $this->Num_Dias;
    }

    public function setNumDias(string $Num_Dias): self
    {
        $this->Num_Dias = $Num_Dias;

        return $this;
    }

    public function getHoras(): ?string
    {
        return $this->Horas;
    }

    public function setHoras(string $Horas): self
    {
        $this->Horas = $Horas;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->Tipo;
    }

    public function setTipo(string $Tipo): self
    {
        $this->Tipo = $Tipo;

        return $this;
    }

    public function getPeriodo(): ?string
    {
        return $this->Periodo;
    }

    public function setPeriodo(string $Periodo): self
    {
        $this->Periodo = $Periodo;

        return $this;
    }

    public function getObservacion(): ?string
    {
        return $this->Observacion;
    }

    public function setObservacion(string $Observacion): self
    {
        $this->Observacion = $Observacion;

        return $this;
    }

    public function getAreaConocimiento(): ?string
    {
        return $this->Area_Conocimiento;
    }

    public function setAreaConocimiento(string $Area_Conocimiento): self
    {
        $this->Area_Conocimiento = $Area_Conocimiento;

        return $this;
    }

    public function getNumEst(): ?string
    {
        return $this->Num_Est;
    }

    public function setNumEst(string $Num_Est): self
    {
        $this->Num_Est = $Num_Est;

        return $this;
    }
}

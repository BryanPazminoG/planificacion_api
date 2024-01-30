<?php

namespace App\Entity;

use App\Repository\PrediccionesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrediccionesRepository::class)
 */
class Predicciones
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
    private $Campus;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Departamento;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Asignatura;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Codigo;

    /**
     * @ORM\Column(type="float")
     */
    private $Estudiantes_Rl;

    /**
     * @ORM\Column(type="float")
     */
    private $Estudiantes_AD;

    /**
     * @ORM\Column(type="float")
     */
    private $Estudiantes_SE;

    /**
     * @ORM\Column(type="float")
     */
    private $NRC_RL;

    /**
     * @ORM\Column(type="float")
     */
    private $NRC_SE;

    /**
     * @ORM\Column(type="float")
     */
    private $NRC_AD;

    /**
     * @ORM\Column(type="float")
     */
    private $HORAS_RL;

    /**
     * @ORM\Column(type="float")
     */
    private $HORAS_SE;

    /**
     * @ORM\Column(type="float")
     */
    private $HORAS_AD;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $AreaConocimiento;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Observacion_Rl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Codigo_Asignatura;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDepartamento(): ?string
    {
        return $this->Departamento;
    }

    public function setDepartamento(string $Departamento): self
    {
        $this->Departamento = $Departamento;

        return $this;
    }

    public function getAsignatura(): ?string
    {
        return $this->Asignatura;
    }

    public function setAsignatura(string $Asignatura): self
    {
        $this->Asignatura = $Asignatura;

        return $this;
    }

    public function getAreaConocimiento(): ?string
    {
        return $this->AreaConocimiento;
    }

    public function setAreaConocimiento(string $AreaDeConocimiento): self
    {
        $this->AreaConocimiento = $AreaDeConocimiento;

        return $this;
    }

    public function getCodigo(): ?string
    {
        return $this->Codigo;
    }

    public function setCodigo(string $Codigo): self
    {
        $this->Codigo = $Codigo;

        return $this;
    }

    public function getEstudiantesRl(): ?float
    {
        return $this->Estudiantes_Rl;
    }

    public function setEstudiantesRl(float $Estudiantes_Rl): self
    {
        $this->Estudiantes_Rl = $Estudiantes_Rl;

        return $this;
    }

    public function getEstudiantesAD(): ?float
    {
        return $this->Estudiantes_AD;
    }

    public function setEstudiantesAD(float $Estudiantes_AD): self
    {
        $this->Estudiantes_AD = $Estudiantes_AD;

        return $this;
    }

    public function getEstudiantesSE(): ?float
    {
        return $this->Estudiantes_SE;
    }

    public function setEstudiantesSE(float $Estudiantes_SE): self
    {
        $this->Estudiantes_SE = $Estudiantes_SE;

        return $this;
    }

    public function getNRCRL(): ?float
    {
        return $this->NRC_RL;
    }

    public function setNRCRL(float $NRC_RL): self
    {
        $this->NRC_RL = $NRC_RL;

        return $this;
    }

    public function getNRCSE(): ?float
    {
        return $this->NRC_SE;
    }

    public function setNRCSE(float $NRC_SE): self
    {
        $this->NRC_SE = $NRC_SE;

        return $this;
    }

    public function getNRCAD(): ?float
    {
        return $this->NRC_AD;
    }

    public function setNRCAD(float $NRC_AD): self
    {
        $this->NRC_AD = $NRC_AD;

        return $this;
    }

    public function getHORASRL(): ?float
    {
        return $this->HORAS_RL;
    }

    public function setHORASRL(float $HORAS_RL): self
    {
        $this->HORAS_RL = $HORAS_RL;

        return $this;
    }

    public function getHORASSE(): ?float
    {
        return $this->HORAS_SE;
    }

    public function setHORASSE(float $HORAS_SE): self
    {
        $this->HORAS_SE = $HORAS_SE;

        return $this;
    }

    public function getHORASAD(): ?float
    {
        return $this->HORAS_AD;
    }

    public function setHORASAD(float $HORAS_AD): self
    {
        $this->HORAS_AD = $HORAS_AD;

        return $this;
    }

    public function getObservacionRl(): ?string
    {
        return $this->Observacion_Rl;
    }

    public function setObservacionRl(string $Observacion_Rl): self
    {
        $this->Observacion_Rl = $Observacion_Rl;

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
}

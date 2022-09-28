<?php

namespace App\Entity;

use App\Repository\ReceptionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReceptionsRepository::class)]
class Receptions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $productName = null;

    #[ORM\Column]
    private ?int $temperature = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $etatemballage = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $numerolot = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dlcdluo = null;

    #[ORM\Column(length: 255)]
    private ?string $conformity_etiquetage = null;

    #[ORM\Column(length: 255)]
    private ?string $conformite_reception_yn = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observations = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $numero_bliv = null;

    #[ORM\Column(length: 255)]
    private ?string $visalivreur = null;

    #[ORM\Column(length: 255)]
    private ?string $visareceptionnaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getTemperature(): ?int
    {
        return $this->temperature;
    }

    public function setTemperature(int $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getEtatemballage(): ?string
    {
        return $this->etatemballage;
    }

    public function setEtatemballage(?string $etatemballage): self
    {
        $this->etatemballage = $etatemballage;

        return $this;
    }

    public function getNumerolot(): ?string
    {
        return $this->numerolot;
    }

    public function setNumerolot(string $numerolot): self
    {
        $this->numerolot = $numerolot;

        return $this;
    }

    public function getDlcdluo(): ?\DateTimeInterface
    {
        return $this->dlcdluo;
    }

    public function setDlcdluo(?\DateTimeInterface $dlcdluo): self
    {
        $this->dlcdluo = $dlcdluo;

        return $this;
    }

    public function getConformityEtiquetage(): ?string
    {
        return $this->conformity_etiquetage;
    }

    public function setConformityEtiquetage(string $conformity_etiquetage): self
    {
        $this->conformity_etiquetage = $conformity_etiquetage;

        return $this;
    }

    public function getConformiteReceptionYn(): ?string
    {
        return $this->conformite_reception_yn;
    }

    public function setConformiteReceptionYn(string $conformite_reception_yn): self
    {
        $this->conformite_reception_yn = $conformite_reception_yn;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): self
    {
        $this->observations = $observations;

        return $this;
    }

    public function getNumeroBliv(): ?string
    {
        return $this->numero_bliv;
    }

    public function setNumeroBliv(?string $numero_bliv): self
    {
        $this->numero_bliv = $numero_bliv;

        return $this;
    }

    public function getVisalivreur(): ?string
    {
        return $this->visalivreur;
    }

    public function setVisalivreur(string $visalivreur): self
    {
        $this->visalivreur = $visalivreur;

        return $this;
    }

    public function getVisareceptionnaire(): ?string
    {
        return $this->visareceptionnaire;
    }

    public function setVisareceptionnaire(string $visareceptionnaire): self
    {
        $this->visareceptionnaire = $visareceptionnaire;

        return $this;
    }
    public function __toString()
    {
        return $this->getdate();
    }

}

<?php

namespace App\Entity;

use App\Repository\SentenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=SentenceRepository::class)
 * @ORM\HasLifecycleCallbacks()php
 */
class Sentence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("sentence:read")
     */
    private $audio;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=Patient::class, inversedBy="sentences")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;

    /**
     * @ORM\PrePersist
     */
    public function setCreated()
    {
        $this->setCreatedAt(new \DateTime());
    }

    /**
     * @ORM\ManyToMany(targetEntity=Pictogram::class, inversedBy="sentences")
     */
    private $pictos;

    /**
     * @ORM\ManyToMany(targetEntity=PictoAdjectifs::class, mappedBy="sentences")
     */
    private $pictoAdjectifs;

    /**
     * @ORM\ManyToMany(targetEntity=PictoActions::class, mappedBy="sentences")
     */
    private $pictoActions;

    /**
     * @ORM\ManyToMany(targetEntity=PictoAliments::class, mappedBy="sentences")
     */
    private $pictoAliments;

    /**
     * @ORM\ManyToMany(targetEntity=PictoAnimaux::class, mappedBy="sentences")
     */
    private $pictoAnimauxes;

    /**
     * @ORM\ManyToMany(targetEntity=PictoAutresMots::class, mappedBy="sentences")
     */
    private $pictoAutresMots;

    /**
     * @ORM\ManyToMany(targetEntity=PictoBoissons::class, mappedBy="sentences")
     */
    private $pictoBoissons;

    /**
     * @ORM\ManyToMany(targetEntity=PictoChiffres::class, mappedBy="sentences")
     */
    private $pictoChiffres;

    /**
     * @ORM\ManyToMany(targetEntity=PictoComportements::class, mappedBy="sentences")
     */
    private $pictoComportements;

    /**
     * @ORM\ManyToMany(targetEntity=PictoCorpsHumain::class, mappedBy="sentences")
     */
    private $pictoCorpsHumains;

    /**
     * @ORM\ManyToMany(targetEntity=PictoCouleurs::class, mappedBy="sentences")
     */
    private $pictoCouleurs;

    /**
     * @ORM\ManyToMany(targetEntity=PictoCouverts::class, mappedBy="sentences")
     */
    private $pictoCouverts;

    /**
     * @ORM\ManyToMany(targetEntity=PictoEmotions::class, mappedBy="sentences")
     */
    private $pictoEmotions;

    /**
     * @ORM\ManyToMany(targetEntity=PictoFormes::class, mappedBy="sentences")
     */
    private $pictoFormes;

    /**
     * @ORM\ManyToMany(targetEntity=PictoFruitsLegumes::class, mappedBy="sentences")
     */
    private $pictoFruitsLegumes;

    /**
     * @ORM\ManyToMany(targetEntity=PictoHeures::class, mappedBy="sentences")
     */
    private $pictoHeures;

    /**
     * @ORM\ManyToMany(targetEntity=PictoInterrogatif::class, mappedBy="sentences")
     */
    private $pictoInterrogatifs;

    /**
     * @ORM\ManyToMany(targetEntity=PictoJouet::class, mappedBy="sentences")
     */
    private $pictoJouets;

    /**
     * @ORM\ManyToMany(targetEntity=PictoJournees::class, mappedBy="sentences")
     */
    private $pictoJournees;

    /**
     * @ORM\ManyToMany(targetEntity=PictoLanguesDesSignes::class, mappedBy="sentences")
     */
    private $pictoLanguesDesSignes;

    /**
     * @ORM\ManyToMany(targetEntity=PictoLieux::class, mappedBy="sentences")
     */
    private $pictoLieuxes;

    /**
     * @ORM\ManyToMany(targetEntity=PictoMeteo::class, mappedBy="sentences")
     */
    private $pictoMeteos;

    /**
     * @ORM\ManyToMany(targetEntity=PictoMultimedia::class, mappedBy="sentences")
     */
    private $pictoMultimedia;

    /**
     * @ORM\ManyToMany(targetEntity=PictoObjets::class, mappedBy="sentences")
     */
    private $pictoObjets;

    /**
     * @ORM\ManyToMany(targetEntity=PictoOrientation::class, mappedBy="sentences")
     */
    private $pictoOrientations;

    /**
     * @ORM\ManyToMany(targetEntity=PictoPersonnes::class, mappedBy="sentences")
     */
    private $pictoPersonnes;

    /**
     * @ORM\ManyToMany(targetEntity=PictoPetitsMots::class, mappedBy="sentences")
     */
    private $pictoPetitsMots;

    /**
     * @ORM\ManyToMany(targetEntity=PictoScolarite::class, mappedBy="sentences")
     */
    private $pictoScolarites;

    /**
     * @ORM\ManyToMany(targetEntity=PictoSecuriteRoutiere::class, mappedBy="sentences")
     */
    private $pictoSecuriteRoutieres;

    /**
     * @ORM\ManyToMany(targetEntity=PictoSports::class, mappedBy="sentences")
     */
    private $pictoSports;

    /**
     * @ORM\ManyToMany(targetEntity=PictoSujets::class, mappedBy="sentences")
     */
    private $pictoSujets;

    /**
     * @ORM\ManyToMany(targetEntity=PictoTransports::class, mappedBy="sentences")
     */
    private $pictoTransports;

    /**
     * @ORM\ManyToMany(targetEntity=PictoVetements::class, mappedBy="sentences")
     */
    private $pictoVetements;

    public function __construct()
    {
        // $this->pictos = new ArrayCollection();
        $this->pictoAdjectifs = new ArrayCollection();
        $this->pictoActions = new ArrayCollection();
        $this->pictoAliments = new ArrayCollection();
        $this->pictoAnimauxes = new ArrayCollection();
        $this->pictoAutresMots = new ArrayCollection();
        $this->pictoBoissons = new ArrayCollection();
        $this->pictoChiffres = new ArrayCollection();
        $this->pictoComportements = new ArrayCollection();
        $this->pictoCorpsHumains = new ArrayCollection();
        $this->pictoCouleurs = new ArrayCollection();
        $this->pictoCouverts = new ArrayCollection();
        $this->pictoEmotions = new ArrayCollection();
        $this->pictoFormes = new ArrayCollection();
        $this->pictoFruitsLegumes = new ArrayCollection();
        $this->pictoHeures = new ArrayCollection();
        $this->pictoInterrogatifs = new ArrayCollection();
        $this->pictoJouets = new ArrayCollection();
        $this->pictoJournees = new ArrayCollection();
        $this->pictoLanguesDesSignes = new ArrayCollection();
        $this->pictoLieuxes = new ArrayCollection();
        $this->pictoMeteos = new ArrayCollection();
        $this->pictoMultimedia = new ArrayCollection();
        $this->pictoObjets = new ArrayCollection();
        $this->pictoOrientations = new ArrayCollection();
        $this->pictoPersonnes = new ArrayCollection();
        $this->pictoPetitsMots = new ArrayCollection();
        $this->pictoScolarites = new ArrayCollection();
        $this->pictoSecuriteRoutieres = new ArrayCollection();
        $this->pictoSports = new ArrayCollection();
        $this->pictoSujets = new ArrayCollection();
        $this->pictoTransports = new ArrayCollection();
        $this->pictoVetements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getAudio(): ?string
    {
        return $this->audio;
    }

    public function setAudio(?string $audio): self
    {
        $this->audio = $audio;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection|Pictogram[]
     */
    public function getPictos(): Collection
    {
        return $this->pictos;
    }

    public function addPicto(Pictogram $picto): self
    {
        if (!$this->pictos->contains($picto)) {
            $this->pictos[] = $picto;
        }

        return $this;
    }

    public function removePicto(Pictogram $picto): self
    {
        $this->pictos->removeElement($picto);

        return $this;
    }
/**
     * Get the value of patient
     */ 
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set the value of patient
     *
     * @return  self
     */ 
    public function setPatient($patient)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * @return Collection<int, PictoAdjectifs>
     */
    public function getPictoAdjectifs(): Collection
    {
        return $this->pictoAdjectifs;
    }

    public function addPictoAdjectif(PictoAdjectifs $pictoAdjectif): self
    {
        if (!$this->pictoAdjectifs->contains($pictoAdjectif)) {
            $this->pictoAdjectifs[] = $pictoAdjectif;
            $pictoAdjectif->addSentence($this);
        }

        return $this;
    }

    public function removePictoAdjectif(PictoAdjectifs $pictoAdjectif): self
    {
        if ($this->pictoAdjectifs->removeElement($pictoAdjectif)) {
            $pictoAdjectif->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoActions>
     */
    public function getPictoActions(): Collection
    {
        return $this->pictoActions;
    }

    public function addPictoAction(PictoActions $pictoAction): self
    {
        if (!$this->pictoActions->contains($pictoAction)) {
            $this->pictoActions[] = $pictoAction;
            $pictoAction->addSentence($this);
        }

        return $this;
    }

    public function removePictoAction(PictoActions $pictoAction): self
    {
        if ($this->pictoActions->removeElement($pictoAction)) {
            $pictoAction->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoAliments>
     */
    public function getPictoAliments(): Collection
    {
        return $this->pictoAliments;
    }

    public function addPictoAliment(PictoAliments $pictoAliment): self
    {
        if (!$this->pictoAliments->contains($pictoAliment)) {
            $this->pictoAliments[] = $pictoAliment;
            $pictoAliment->addSentence($this);
        }

        return $this;
    }

    public function removePictoAliment(PictoAliments $pictoAliment): self
    {
        if ($this->pictoAliments->removeElement($pictoAliment)) {
            $pictoAliment->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoAnimaux>
     */
    public function getPictoAnimauxes(): Collection
    {
        return $this->pictoAnimauxes;
    }

    public function addPictoAnimaux(PictoAnimaux $pictoAnimaux): self
    {
        if (!$this->pictoAnimauxes->contains($pictoAnimaux)) {
            $this->pictoAnimauxes[] = $pictoAnimaux;
            $pictoAnimaux->addSentence($this);
        }

        return $this;
    }

    public function removePictoAnimaux(PictoAnimaux $pictoAnimaux): self
    {
        if ($this->pictoAnimauxes->removeElement($pictoAnimaux)) {
            $pictoAnimaux->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoAutresMots>
     */
    public function getPictoAutresMots(): Collection
    {
        return $this->pictoAutresMots;
    }

    public function addPictoAutresMot(PictoAutresMots $pictoAutresMot): self
    {
        if (!$this->pictoAutresMots->contains($pictoAutresMot)) {
            $this->pictoAutresMots[] = $pictoAutresMot;
            $pictoAutresMot->addSentence($this);
        }

        return $this;
    }

    public function removePictoAutresMot(PictoAutresMots $pictoAutresMot): self
    {
        if ($this->pictoAutresMots->removeElement($pictoAutresMot)) {
            $pictoAutresMot->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoBoissons>
     */
    public function getPictoBoissons(): Collection
    {
        return $this->pictoBoissons;
    }

    public function addPictoBoisson(PictoBoissons $pictoBoisson): self
    {
        if (!$this->pictoBoissons->contains($pictoBoisson)) {
            $this->pictoBoissons[] = $pictoBoisson;
            $pictoBoisson->addSentence($this);
        }

        return $this;
    }

    public function removePictoBoisson(PictoBoissons $pictoBoisson): self
    {
        if ($this->pictoBoissons->removeElement($pictoBoisson)) {
            $pictoBoisson->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoChiffres>
     */
    public function getPictoChiffres(): Collection
    {
        return $this->pictoChiffres;
    }

    public function addPictoChiffre(PictoChiffres $pictoChiffre): self
    {
        if (!$this->pictoChiffres->contains($pictoChiffre)) {
            $this->pictoChiffres[] = $pictoChiffre;
            $pictoChiffre->addSentence($this);
        }

        return $this;
    }

    public function removePictoChiffre(PictoChiffres $pictoChiffre): self
    {
        if ($this->pictoChiffres->removeElement($pictoChiffre)) {
            $pictoChiffre->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoComportements>
     */
    public function getPictoComportements(): Collection
    {
        return $this->pictoComportements;
    }

    public function addPictoComportement(PictoComportements $pictoComportement): self
    {
        if (!$this->pictoComportements->contains($pictoComportement)) {
            $this->pictoComportements[] = $pictoComportement;
            $pictoComportement->addSentence($this);
        }

        return $this;
    }

    public function removePictoComportement(PictoComportements $pictoComportement): self
    {
        if ($this->pictoComportements->removeElement($pictoComportement)) {
            $pictoComportement->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoCorpsHumain>
     */
    public function getPictoCorpsHumains(): Collection
    {
        return $this->pictoCorpsHumains;
    }

    public function addPictoCorpsHumain(PictoCorpsHumain $pictoCorpsHumain): self
    {
        if (!$this->pictoCorpsHumains->contains($pictoCorpsHumain)) {
            $this->pictoCorpsHumains[] = $pictoCorpsHumain;
            $pictoCorpsHumain->addSentence($this);
        }

        return $this;
    }

    public function removePictoCorpsHumain(PictoCorpsHumain $pictoCorpsHumain): self
    {
        if ($this->pictoCorpsHumains->removeElement($pictoCorpsHumain)) {
            $pictoCorpsHumain->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoCouleurs>
     */
    public function getPictoCouleurs(): Collection
    {
        return $this->pictoCouleurs;
    }

    public function addPictoCouleur(PictoCouleurs $pictoCouleur): self
    {
        if (!$this->pictoCouleurs->contains($pictoCouleur)) {
            $this->pictoCouleurs[] = $pictoCouleur;
            $pictoCouleur->addSentence($this);
        }

        return $this;
    }

    public function removePictoCouleur(PictoCouleurs $pictoCouleur): self
    {
        if ($this->pictoCouleurs->removeElement($pictoCouleur)) {
            $pictoCouleur->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoCouverts>
     */
    public function getPictoCouverts(): Collection
    {
        return $this->pictoCouverts;
    }

    public function addPictoCouvert(PictoCouverts $pictoCouvert): self
    {
        if (!$this->pictoCouverts->contains($pictoCouvert)) {
            $this->pictoCouverts[] = $pictoCouvert;
            $pictoCouvert->addSentence($this);
        }

        return $this;
    }

    public function removePictoCouvert(PictoCouverts $pictoCouvert): self
    {
        if ($this->pictoCouverts->removeElement($pictoCouvert)) {
            $pictoCouvert->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoEmotions>
     */
    public function getPictoEmotions(): Collection
    {
        return $this->pictoEmotions;
    }

    public function addPictoEmotion(PictoEmotions $pictoEmotion): self
    {
        if (!$this->pictoEmotions->contains($pictoEmotion)) {
            $this->pictoEmotions[] = $pictoEmotion;
            $pictoEmotion->addSentence($this);
        }

        return $this;
    }

    public function removePictoEmotion(PictoEmotions $pictoEmotion): self
    {
        if ($this->pictoEmotions->removeElement($pictoEmotion)) {
            $pictoEmotion->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoFormes>
     */
    public function getPictoFormes(): Collection
    {
        return $this->pictoFormes;
    }

    public function addPictoForme(PictoFormes $pictoForme): self
    {
        if (!$this->pictoFormes->contains($pictoForme)) {
            $this->pictoFormes[] = $pictoForme;
            $pictoForme->addSentence($this);
        }

        return $this;
    }

    public function removePictoForme(PictoFormes $pictoForme): self
    {
        if ($this->pictoFormes->removeElement($pictoForme)) {
            $pictoForme->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoFruitsLegumes>
     */
    public function getPictoFruitsLegumes(): Collection
    {
        return $this->pictoFruitsLegumes;
    }

    public function addPictoFruitsLegume(PictoFruitsLegumes $pictoFruitsLegume): self
    {
        if (!$this->pictoFruitsLegumes->contains($pictoFruitsLegume)) {
            $this->pictoFruitsLegumes[] = $pictoFruitsLegume;
            $pictoFruitsLegume->addSentence($this);
        }

        return $this;
    }

    public function removePictoFruitsLegume(PictoFruitsLegumes $pictoFruitsLegume): self
    {
        if ($this->pictoFruitsLegumes->removeElement($pictoFruitsLegume)) {
            $pictoFruitsLegume->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoHeures>
     */
    public function getPictoHeures(): Collection
    {
        return $this->pictoHeures;
    }

    public function addPictoHeure(PictoHeures $pictoHeure): self
    {
        if (!$this->pictoHeures->contains($pictoHeure)) {
            $this->pictoHeures[] = $pictoHeure;
            $pictoHeure->addSentence($this);
        }

        return $this;
    }

    public function removePictoHeure(PictoHeures $pictoHeure): self
    {
        if ($this->pictoHeures->removeElement($pictoHeure)) {
            $pictoHeure->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoInterrogatif>
     */
    public function getPictoInterrogatifs(): Collection
    {
        return $this->pictoInterrogatifs;
    }

    public function addPictoInterrogatif(PictoInterrogatif $pictoInterrogatif): self
    {
        if (!$this->pictoInterrogatifs->contains($pictoInterrogatif)) {
            $this->pictoInterrogatifs[] = $pictoInterrogatif;
            $pictoInterrogatif->addSentence($this);
        }

        return $this;
    }

    public function removePictoInterrogatif(PictoInterrogatif $pictoInterrogatif): self
    {
        if ($this->pictoInterrogatifs->removeElement($pictoInterrogatif)) {
            $pictoInterrogatif->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoJouet>
     */
    public function getPictoJouets(): Collection
    {
        return $this->pictoJouets;
    }

    public function addPictoJouet(PictoJouet $pictoJouet): self
    {
        if (!$this->pictoJouets->contains($pictoJouet)) {
            $this->pictoJouets[] = $pictoJouet;
            $pictoJouet->addSentence($this);
        }

        return $this;
    }

    public function removePictoJouet(PictoJouet $pictoJouet): self
    {
        if ($this->pictoJouets->removeElement($pictoJouet)) {
            $pictoJouet->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoJournees>
     */
    public function getPictoJournees(): Collection
    {
        return $this->pictoJournees;
    }

    public function addPictoJournee(PictoJournees $pictoJournee): self
    {
        if (!$this->pictoJournees->contains($pictoJournee)) {
            $this->pictoJournees[] = $pictoJournee;
            $pictoJournee->addSentence($this);
        }

        return $this;
    }

    public function removePictoJournee(PictoJournees $pictoJournee): self
    {
        if ($this->pictoJournees->removeElement($pictoJournee)) {
            $pictoJournee->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoLanguesDesSignes>
     */
    public function getPictoLanguesDesSignes(): Collection
    {
        return $this->pictoLanguesDesSignes;
    }

    public function addPictoLanguesDesSigne(PictoLanguesDesSignes $pictoLanguesDesSigne): self
    {
        if (!$this->pictoLanguesDesSignes->contains($pictoLanguesDesSigne)) {
            $this->pictoLanguesDesSignes[] = $pictoLanguesDesSigne;
            $pictoLanguesDesSigne->addSentence($this);
        }

        return $this;
    }

    public function removePictoLanguesDesSigne(PictoLanguesDesSignes $pictoLanguesDesSigne): self
    {
        if ($this->pictoLanguesDesSignes->removeElement($pictoLanguesDesSigne)) {
            $pictoLanguesDesSigne->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoLieux>
     */
    public function getPictoLieuxes(): Collection
    {
        return $this->pictoLieuxes;
    }

    public function addPictoLieux(PictoLieux $pictoLieux): self
    {
        if (!$this->pictoLieuxes->contains($pictoLieux)) {
            $this->pictoLieuxes[] = $pictoLieux;
            $pictoLieux->addSentence($this);
        }

        return $this;
    }

    public function removePictoLieux(PictoLieux $pictoLieux): self
    {
        if ($this->pictoLieuxes->removeElement($pictoLieux)) {
            $pictoLieux->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoMeteo>
     */
    public function getPictoMeteos(): Collection
    {
        return $this->pictoMeteos;
    }

    public function addPictoMeteo(PictoMeteo $pictoMeteo): self
    {
        if (!$this->pictoMeteos->contains($pictoMeteo)) {
            $this->pictoMeteos[] = $pictoMeteo;
            $pictoMeteo->addSentence($this);
        }

        return $this;
    }

    public function removePictoMeteo(PictoMeteo $pictoMeteo): self
    {
        if ($this->pictoMeteos->removeElement($pictoMeteo)) {
            $pictoMeteo->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoMultimedia>
     */
    public function getPictoMultimedia(): Collection
    {
        return $this->pictoMultimedia;
    }

    public function addPictoMultimedia(PictoMultimedia $pictoMultimedia): self
    {
        if (!$this->pictoMultimedia->contains($pictoMultimedia)) {
            $this->pictoMultimedia[] = $pictoMultimedia;
            $pictoMultimedia->addSentence($this);
        }

        return $this;
    }

    public function removePictoMultimedia(PictoMultimedia $pictoMultimedia): self
    {
        if ($this->pictoMultimedia->removeElement($pictoMultimedia)) {
            $pictoMultimedia->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoObjets>
     */
    public function getPictoObjets(): Collection
    {
        return $this->pictoObjets;
    }

    public function addPictoObjet(PictoObjets $pictoObjet): self
    {
        if (!$this->pictoObjets->contains($pictoObjet)) {
            $this->pictoObjets[] = $pictoObjet;
            $pictoObjet->addSentence($this);
        }

        return $this;
    }

    public function removePictoObjet(PictoObjets $pictoObjet): self
    {
        if ($this->pictoObjets->removeElement($pictoObjet)) {
            $pictoObjet->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoOrientation>
     */
    public function getPictoOrientations(): Collection
    {
        return $this->pictoOrientations;
    }

    public function addPictoOrientation(PictoOrientation $pictoOrientation): self
    {
        if (!$this->pictoOrientations->contains($pictoOrientation)) {
            $this->pictoOrientations[] = $pictoOrientation;
            $pictoOrientation->addSentence($this);
        }

        return $this;
    }

    public function removePictoOrientation(PictoOrientation $pictoOrientation): self
    {
        if ($this->pictoOrientations->removeElement($pictoOrientation)) {
            $pictoOrientation->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoPersonnes>
     */
    public function getPictoPersonnes(): Collection
    {
        return $this->pictoPersonnes;
    }

    public function addPictoPersonne(PictoPersonnes $pictoPersonne): self
    {
        if (!$this->pictoPersonnes->contains($pictoPersonne)) {
            $this->pictoPersonnes[] = $pictoPersonne;
            $pictoPersonne->addSentence($this);
        }

        return $this;
    }

    public function removePictoPersonne(PictoPersonnes $pictoPersonne): self
    {
        if ($this->pictoPersonnes->removeElement($pictoPersonne)) {
            $pictoPersonne->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoPetitsMots>
     */
    public function getPictoPetitsMots(): Collection
    {
        return $this->pictoPetitsMots;
    }

    public function addPictoPetitsMot(PictoPetitsMots $pictoPetitsMot): self
    {
        if (!$this->pictoPetitsMots->contains($pictoPetitsMot)) {
            $this->pictoPetitsMots[] = $pictoPetitsMot;
            $pictoPetitsMot->addSentence($this);
        }

        return $this;
    }

    public function removePictoPetitsMot(PictoPetitsMots $pictoPetitsMot): self
    {
        if ($this->pictoPetitsMots->removeElement($pictoPetitsMot)) {
            $pictoPetitsMot->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoScolarite>
     */
    public function getPictoScolarites(): Collection
    {
        return $this->pictoScolarites;
    }

    public function addPictoScolarite(PictoScolarite $pictoScolarite): self
    {
        if (!$this->pictoScolarites->contains($pictoScolarite)) {
            $this->pictoScolarites[] = $pictoScolarite;
            $pictoScolarite->addSentence($this);
        }

        return $this;
    }

    public function removePictoScolarite(PictoScolarite $pictoScolarite): self
    {
        if ($this->pictoScolarites->removeElement($pictoScolarite)) {
            $pictoScolarite->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoSecuriteRoutiere>
     */
    public function getPictoSecuriteRoutieres(): Collection
    {
        return $this->pictoSecuriteRoutieres;
    }

    public function addPictoSecuriteRoutiere(PictoSecuriteRoutiere $pictoSecuriteRoutiere): self
    {
        if (!$this->pictoSecuriteRoutieres->contains($pictoSecuriteRoutiere)) {
            $this->pictoSecuriteRoutieres[] = $pictoSecuriteRoutiere;
            $pictoSecuriteRoutiere->addSentence($this);
        }

        return $this;
    }

    public function removePictoSecuriteRoutiere(PictoSecuriteRoutiere $pictoSecuriteRoutiere): self
    {
        if ($this->pictoSecuriteRoutieres->removeElement($pictoSecuriteRoutiere)) {
            $pictoSecuriteRoutiere->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoSports>
     */
    public function getPictoSports(): Collection
    {
        return $this->pictoSports;
    }

    public function addPictoSport(PictoSports $pictoSport): self
    {
        if (!$this->pictoSports->contains($pictoSport)) {
            $this->pictoSports[] = $pictoSport;
            $pictoSport->addSentence($this);
        }

        return $this;
    }

    public function removePictoSport(PictoSports $pictoSport): self
    {
        if ($this->pictoSports->removeElement($pictoSport)) {
            $pictoSport->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoSujets>
     */
    public function getPictoSujets(): Collection
    {
        return $this->pictoSujets;
    }

    public function addPictoSujet(PictoSujets $pictoSujet): self
    {
        if (!$this->pictoSujets->contains($pictoSujet)) {
            $this->pictoSujets[] = $pictoSujet;
            $pictoSujet->addSentence($this);
        }

        return $this;
    }

    public function removePictoSujet(PictoSujets $pictoSujet): self
    {
        if ($this->pictoSujets->removeElement($pictoSujet)) {
            $pictoSujet->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoTransports>
     */
    public function getPictoTransports(): Collection
    {
        return $this->pictoTransports;
    }

    public function addPictoTransport(PictoTransports $pictoTransport): self
    {
        if (!$this->pictoTransports->contains($pictoTransport)) {
            $this->pictoTransports[] = $pictoTransport;
            $pictoTransport->addSentence($this);
        }

        return $this;
    }

    public function removePictoTransport(PictoTransports $pictoTransport): self
    {
        if ($this->pictoTransports->removeElement($pictoTransport)) {
            $pictoTransport->removeSentence($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, PictoVetements>
     */
    public function getPictoVetements(): Collection
    {
        return $this->pictoVetements;
    }

    public function addPictoVetement(PictoVetements $pictoVetement): self
    {
        if (!$this->pictoVetements->contains($pictoVetement)) {
            $this->pictoVetements[] = $pictoVetement;
            $pictoVetement->addSentence($this);
        }

        return $this;
    }

    public function removePictoVetement(PictoVetements $pictoVetement): self
    {
        if ($this->pictoVetements->removeElement($pictoVetement)) {
            $pictoVetement->removeSentence($this);
        }

        return $this;
    }
}
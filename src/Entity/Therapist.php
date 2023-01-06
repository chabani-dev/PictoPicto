<?php

namespace App\Entity;

use App\Repository\TherapistRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=TherapistRepository::class)
 */
class Therapist implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    //  /**
    //  * @ORM\OneToMany(targetEntity=PictoActions::class, mappedBy="therapist")
    //  */
    // private $pictograms;

     /**
     * @ORM\OneToMany(targetEntity=Category::class, mappedBy="therapist")
     */
    private $categories;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job;

    /**
     * @ORM\ManyToOne(targetEntity=Institution::class, inversedBy="therapists")
     * @ORM\JoinColumn(nullable=true)
     */
    private $institution;

    /**
     * @ORM\OneToMany(targetEntity=Note::class, mappedBy="therapist")
     */
    private $notes;

    /**
     * @ORM\OneToMany(targetEntity=SubCategory::class, mappedBy="therapist_id")
     */
    private $subCategories;

    /**
     * @ORM\OneToMany(targetEntity=PictoAdjectifs::class, mappedBy="therapist")
     */
    private $pictoAdjectifs;

    /**
     * @ORM\OneToMany(targetEntity=PictoActions::class, mappedBy="therapist")
     */
    private $pictoActions;

    /**
     * @ORM\OneToMany(targetEntity=PictoAliments::class, mappedBy="therapist")
     */
    private $pictoAliments;

    /**
     * @ORM\OneToMany(targetEntity=PictoAnimaux::class, mappedBy="therapist")
     */
    private $pictoAnimauxes;

    /**
     * @ORM\OneToMany(targetEntity=PictoAutresMots::class, mappedBy="therapist")
     */
    private $pictoAutresMots;

    /**
     * @ORM\OneToMany(targetEntity=PictoBoissons::class, mappedBy="therapist")
     */
    private $pictoBoissons;

    /**
     * @ORM\OneToMany(targetEntity=PictoChiffres::class, mappedBy="therapist")
     */
    private $pictoChiffres;

    /**
     * @ORM\OneToMany(targetEntity=PictoComportements::class, mappedBy="therapist")
     */
    private $pictoComportements;

    /**
     * @ORM\OneToMany(targetEntity=PictoCorpsHumain::class, mappedBy="therapist")
     */
    private $pictoCorpsHumains;

    /**
     * @ORM\OneToMany(targetEntity=PictoCouleurs::class, mappedBy="therapist")
     */
    private $pictoCouleurs;

    /**
     * @ORM\OneToMany(targetEntity=PictoCouverts::class, mappedBy="therapist")
     */
    private $pictoCouverts;

    /**
     * @ORM\OneToMany(targetEntity=PictoEmotions::class, mappedBy="therapist")
     */
    private $pictoEmotions;

    /**
     * @ORM\OneToMany(targetEntity=PictoFormes::class, mappedBy="therapist")
     */
    private $pictoFormes;

    /**
     * @ORM\OneToMany(targetEntity=PictoFruitsLegumes::class, mappedBy="therapist")
     */
    private $pictoFruitsLegumes;

    /**
     * @ORM\OneToMany(targetEntity=PictoHeures::class, mappedBy="therapist")
     */
    private $pictoHeures;

    /**
     * @ORM\OneToMany(targetEntity=PictoInterrogatif::class, mappedBy="therapist")
     */
    private $pictoInterrogatifs;

    /**
     * @ORM\OneToMany(targetEntity=PictoJouet::class, mappedBy="therapist")
     */
    private $pictoJouets;

    /**
     * @ORM\OneToMany(targetEntity=PictoJournees::class, mappedBy="therapist")
     */
    private $pictoJournees;

    /**
     * @ORM\OneToMany(targetEntity=PictoLanguesDesSignes::class, mappedBy="therapist")
     */
    private $pictoLanguesDesSignes;

    /**
     * @ORM\OneToMany(targetEntity=PictoLieux::class, mappedBy="therapist")
     */
    private $pictoLieuxes;

    /**
     * @ORM\OneToMany(targetEntity=PictoMeteo::class, mappedBy="therapist")
     */
    private $pictoMeteos;

    /**
     * @ORM\OneToMany(targetEntity=PictoMultimedia::class, mappedBy="therapist")
     */
    private $pictoMultimedia;

    /**
     * @ORM\OneToMany(targetEntity=PictoObjets::class, mappedBy="therapist")
     */
    private $pictoObjets;

    /**
     * @ORM\OneToMany(targetEntity=PictoOrientation::class, mappedBy="therapist")
     */
    private $pictoOrientations;

    /**
     * @ORM\OneToMany(targetEntity=PictoPersonnes::class, mappedBy="therapist")
     */
    private $pictoPersonnes;

    /**
     * @ORM\OneToMany(targetEntity=PictoPetitsMots::class, mappedBy="therapist")
     */
    private $pictoPetitsMots;

    /**
     * @ORM\OneToMany(targetEntity=PictoScolarite::class, mappedBy="therapist")
     */
    private $pictoScolarites;

    /**
     * @ORM\OneToMany(targetEntity=PictoSecuriteRoutiere::class, mappedBy="therapist")
     */
    private $pictoSecuriteRoutieres;

    /**
     * @ORM\OneToMany(targetEntity=PictoSports::class, mappedBy="therapist")
     */
    private $pictoSports;

    /**
     * @ORM\OneToMany(targetEntity=PictoSujets::class, mappedBy="therapist")
     */
    private $pictoSujets;

    /**
     * @ORM\OneToMany(targetEntity=PictoTransports::class, mappedBy="therapist")
     */
    private $pictoTransports;

    /**
     * @ORM\OneToMany(targetEntity=PictoVetements::class, mappedBy="therapist")
     */
    private $pictoVetements;

    

   

    public function __construct()
    {
        $this->notes = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->subCategories = new ArrayCollection();
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {

        if (empty($this->roles)) {
            return ['ROLE_ADMIN'];
        }
        return $this->roles;
        /*// guarantee every therapist at least has ROLE_ADMIN
        $roles[] = 'ROLE_ADMIN';

        return array_unique($roles);*/
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getInstitution(): ?Institution
    {
        return $this->institution;
    }

    public function setInstitution(?Institution $institution): self
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * @return Collection|Note[]
     */
    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(Note $note): self
    {
        if (!$this->notes->contains($note)) {
            $this->notes[] = $note;
            $note->setTherapist($this);
        }

        return $this;
    }

    public function removeNote(Note $note): self
    {
        if ($this->notes->removeElement($note)) {
            // set the owning side to null (unless already changed)
            if ($note->getTherapist() === $this) {
                $note->setTherapist(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getEmail();
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategories(): Collection
    {
        return $this->notes;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->setTherapist($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->notes->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getTherapist() === $this) {
                $category->setTherapist(null);
            }
        }

        return $this;
    }
    

    /**
     * @return Collection|SubCategory[]
     */
    public function getSubCategories(): Collection
    {
        return $this->subCategories;
    }

    public function addSubCategory(SubCategory $subCategory): self
    {
        if (!$this->subCategories->contains($subCategory)) {
            $this->subCategories[] = $subCategory;
            $subCategory->setTherapistId($this);
        }

        return $this;
    }

    public function removeSubCategory(SubCategory $subCategory): self
    {
        if ($this->subCategories->removeElement($subCategory)) {
            // set the owning side to null (unless already changed)
            if ($subCategory->getTherapistId() === $this) {
                $subCategory->setTherapistId(null);
            }
        }

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
            $pictoAdjectif->setTherapist($this);
        }

        return $this;
    }

    public function removePictoAdjectif(PictoAdjectifs $pictoAdjectif): self
    {
        if ($this->pictoAdjectifs->removeElement($pictoAdjectif)) {
            // set the owning side to null (unless already changed)
            if ($pictoAdjectif->getTherapist() === $this) {
                $pictoAdjectif->setTherapist(null);
            }
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
            $pictoAction->setTherapist($this);
        }

        return $this;
    }

    public function removePictoAction(PictoActions $pictoAction): self
    {
        if ($this->pictoActions->removeElement($pictoAction)) {
            // set the owning side to null (unless already changed)
            if ($pictoAction->getTherapist() === $this) {
                $pictoAction->setTherapist(null);
            }
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
            $pictoAliment->setTherapist($this);
        }

        return $this;
    }

    public function removePictoAliment(PictoAliments $pictoAliment): self
    {
        if ($this->pictoAliments->removeElement($pictoAliment)) {
            // set the owning side to null (unless already changed)
            if ($pictoAliment->getTherapist() === $this) {
                $pictoAliment->setTherapist(null);
            }
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
            $pictoAnimaux->setTherapist($this);
        }

        return $this;
    }

    public function removePictoAnimaux(PictoAnimaux $pictoAnimaux): self
    {
        if ($this->pictoAnimauxes->removeElement($pictoAnimaux)) {
            // set the owning side to null (unless already changed)
            if ($pictoAnimaux->getTherapist() === $this) {
                $pictoAnimaux->setTherapist(null);
            }
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
            $pictoAutresMot->setTherapist($this);
        }

        return $this;
    }

    public function removePictoAutresMot(PictoAutresMots $pictoAutresMot): self
    {
        if ($this->pictoAutresMots->removeElement($pictoAutresMot)) {
            // set the owning side to null (unless already changed)
            if ($pictoAutresMot->getTherapist() === $this) {
                $pictoAutresMot->setTherapist(null);
            }
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
            $pictoBoisson->setTherapist($this);
        }

        return $this;
    }

    public function removePictoBoisson(PictoBoissons $pictoBoisson): self
    {
        if ($this->pictoBoissons->removeElement($pictoBoisson)) {
            // set the owning side to null (unless already changed)
            if ($pictoBoisson->getTherapist() === $this) {
                $pictoBoisson->setTherapist(null);
            }
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
            $pictoChiffre->setTherapist($this);
        }

        return $this;
    }

    public function removePictoChiffre(PictoChiffres $pictoChiffre): self
    {
        if ($this->pictoChiffres->removeElement($pictoChiffre)) {
            // set the owning side to null (unless already changed)
            if ($pictoChiffre->getTherapist() === $this) {
                $pictoChiffre->setTherapist(null);
            }
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
            $pictoComportement->setTherapist($this);
        }

        return $this;
    }

    public function removePictoComportement(PictoComportements $pictoComportement): self
    {
        if ($this->pictoComportements->removeElement($pictoComportement)) {
            // set the owning side to null (unless already changed)
            if ($pictoComportement->getTherapist() === $this) {
                $pictoComportement->setTherapist(null);
            }
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
            $pictoCorpsHumain->setTherapist($this);
        }

        return $this;
    }

    public function removePictoCorpsHumain(PictoCorpsHumain $pictoCorpsHumain): self
    {
        if ($this->pictoCorpsHumains->removeElement($pictoCorpsHumain)) {
            // set the owning side to null (unless already changed)
            if ($pictoCorpsHumain->getTherapist() === $this) {
                $pictoCorpsHumain->setTherapist(null);
            }
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
            $pictoCouleur->setTherapist($this);
        }

        return $this;
    }

    public function removePictoCouleur(PictoCouleurs $pictoCouleur): self
    {
        if ($this->pictoCouleurs->removeElement($pictoCouleur)) {
            // set the owning side to null (unless already changed)
            if ($pictoCouleur->getTherapist() === $this) {
                $pictoCouleur->setTherapist(null);
            }
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
            $pictoCouvert->setTherapist($this);
        }

        return $this;
    }

    public function removePictoCouvert(PictoCouverts $pictoCouvert): self
    {
        if ($this->pictoCouverts->removeElement($pictoCouvert)) {
            // set the owning side to null (unless already changed)
            if ($pictoCouvert->getTherapist() === $this) {
                $pictoCouvert->setTherapist(null);
            }
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
            $pictoEmotion->setTherapist($this);
        }

        return $this;
    }

    public function removePictoEmotion(PictoEmotions $pictoEmotion): self
    {
        if ($this->pictoEmotions->removeElement($pictoEmotion)) {
            // set the owning side to null (unless already changed)
            if ($pictoEmotion->getTherapist() === $this) {
                $pictoEmotion->setTherapist(null);
            }
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
            $pictoForme->setTherapist($this);
        }

        return $this;
    }

    public function removePictoForme(PictoFormes $pictoForme): self
    {
        if ($this->pictoFormes->removeElement($pictoForme)) {
            // set the owning side to null (unless already changed)
            if ($pictoForme->getTherapist() === $this) {
                $pictoForme->setTherapist(null);
            }
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
            $pictoFruitsLegume->setTherapist($this);
        }

        return $this;
    }

    public function removePictoFruitsLegume(PictoFruitsLegumes $pictoFruitsLegume): self
    {
        if ($this->pictoFruitsLegumes->removeElement($pictoFruitsLegume)) {
            // set the owning side to null (unless already changed)
            if ($pictoFruitsLegume->getTherapist() === $this) {
                $pictoFruitsLegume->setTherapist(null);
            }
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
            $pictoHeure->setTherapist($this);
        }

        return $this;
    }

    public function removePictoHeure(PictoHeures $pictoHeure): self
    {
        if ($this->pictoHeures->removeElement($pictoHeure)) {
            // set the owning side to null (unless already changed)
            if ($pictoHeure->getTherapist() === $this) {
                $pictoHeure->setTherapist(null);
            }
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
            $pictoInterrogatif->setTherapist($this);
        }

        return $this;
    }

    public function removePictoInterrogatif(PictoInterrogatif $pictoInterrogatif): self
    {
        if ($this->pictoInterrogatifs->removeElement($pictoInterrogatif)) {
            // set the owning side to null (unless already changed)
            if ($pictoInterrogatif->getTherapist() === $this) {
                $pictoInterrogatif->setTherapist(null);
            }
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
            $pictoJouet->setTherapist($this);
        }

        return $this;
    }

    public function removePictoJouet(PictoJouet $pictoJouet): self
    {
        if ($this->pictoJouets->removeElement($pictoJouet)) {
            // set the owning side to null (unless already changed)
            if ($pictoJouet->getTherapist() === $this) {
                $pictoJouet->setTherapist(null);
            }
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
            $pictoJournee->setTherapist($this);
        }

        return $this;
    }

    public function removePictoJournee(PictoJournees $pictoJournee): self
    {
        if ($this->pictoJournees->removeElement($pictoJournee)) {
            // set the owning side to null (unless already changed)
            if ($pictoJournee->getTherapist() === $this) {
                $pictoJournee->setTherapist(null);
            }
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
            $pictoLanguesDesSigne->setTherapist($this);
        }

        return $this;
    }

    public function removePictoLanguesDesSigne(PictoLanguesDesSignes $pictoLanguesDesSigne): self
    {
        if ($this->pictoLanguesDesSignes->removeElement($pictoLanguesDesSigne)) {
            // set the owning side to null (unless already changed)
            if ($pictoLanguesDesSigne->getTherapist() === $this) {
                $pictoLanguesDesSigne->setTherapist(null);
            }
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
            $pictoLieux->setTherapist($this);
        }

        return $this;
    }

    public function removePictoLieux(PictoLieux $pictoLieux): self
    {
        if ($this->pictoLieuxes->removeElement($pictoLieux)) {
            // set the owning side to null (unless already changed)
            if ($pictoLieux->getTherapist() === $this) {
                $pictoLieux->setTherapist(null);
            }
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
            $pictoMeteo->setTherapist($this);
        }

        return $this;
    }

    public function removePictoMeteo(PictoMeteo $pictoMeteo): self
    {
        if ($this->pictoMeteos->removeElement($pictoMeteo)) {
            // set the owning side to null (unless already changed)
            if ($pictoMeteo->getTherapist() === $this) {
                $pictoMeteo->setTherapist(null);
            }
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
            $pictoMultimedia->setTherapist($this);
        }

        return $this;
    }

    public function removePictoMultimedia(PictoMultimedia $pictoMultimedia): self
    {
        if ($this->pictoMultimedia->removeElement($pictoMultimedia)) {
            // set the owning side to null (unless already changed)
            if ($pictoMultimedia->getTherapist() === $this) {
                $pictoMultimedia->setTherapist(null);
            }
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
            $pictoObjet->setTherapist($this);
        }

        return $this;
    }

    public function removePictoObjet(PictoObjets $pictoObjet): self
    {
        if ($this->pictoObjets->removeElement($pictoObjet)) {
            // set the owning side to null (unless already changed)
            if ($pictoObjet->getTherapist() === $this) {
                $pictoObjet->setTherapist(null);
            }
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
            $pictoOrientation->setTherapist($this);
        }

        return $this;
    }

    public function removePictoOrientation(PictoOrientation $pictoOrientation): self
    {
        if ($this->pictoOrientations->removeElement($pictoOrientation)) {
            // set the owning side to null (unless already changed)
            if ($pictoOrientation->getTherapist() === $this) {
                $pictoOrientation->setTherapist(null);
            }
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
            $pictoPersonne->setTherapist($this);
        }

        return $this;
    }

    public function removePictoPersonne(PictoPersonnes $pictoPersonne): self
    {
        if ($this->pictoPersonnes->removeElement($pictoPersonne)) {
            // set the owning side to null (unless already changed)
            if ($pictoPersonne->getTherapist() === $this) {
                $pictoPersonne->setTherapist(null);
            }
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
            $pictoPetitsMot->setTherapist($this);
        }

        return $this;
    }

    public function removePictoPetitsMot(PictoPetitsMots $pictoPetitsMot): self
    {
        if ($this->pictoPetitsMots->removeElement($pictoPetitsMot)) {
            // set the owning side to null (unless already changed)
            if ($pictoPetitsMot->getTherapist() === $this) {
                $pictoPetitsMot->setTherapist(null);
            }
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
            $pictoScolarite->setTherapist($this);
        }

        return $this;
    }

    public function removePictoScolarite(PictoScolarite $pictoScolarite): self
    {
        if ($this->pictoScolarites->removeElement($pictoScolarite)) {
            // set the owning side to null (unless already changed)
            if ($pictoScolarite->getTherapist() === $this) {
                $pictoScolarite->setTherapist(null);
            }
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
            $pictoSecuriteRoutiere->setTherapist($this);
        }

        return $this;
    }

    public function removePictoSecuriteRoutiere(PictoSecuriteRoutiere $pictoSecuriteRoutiere): self
    {
        if ($this->pictoSecuriteRoutieres->removeElement($pictoSecuriteRoutiere)) {
            // set the owning side to null (unless already changed)
            if ($pictoSecuriteRoutiere->getTherapist() === $this) {
                $pictoSecuriteRoutiere->setTherapist(null);
            }
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
            $pictoSport->setTherapist($this);
        }

        return $this;
    }

    public function removePictoSport(PictoSports $pictoSport): self
    {
        if ($this->pictoSports->removeElement($pictoSport)) {
            // set the owning side to null (unless already changed)
            if ($pictoSport->getTherapist() === $this) {
                $pictoSport->setTherapist(null);
            }
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
            $pictoSujet->setTherapist($this);
        }

        return $this;
    }

    public function removePictoSujet(PictoSujets $pictoSujet): self
    {
        if ($this->pictoSujets->removeElement($pictoSujet)) {
            // set the owning side to null (unless already changed)
            if ($pictoSujet->getTherapist() === $this) {
                $pictoSujet->setTherapist(null);
            }
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
            $pictoTransport->setTherapist($this);
        }

        return $this;
    }

    public function removePictoTransport(PictoTransports $pictoTransport): self
    {
        if ($this->pictoTransports->removeElement($pictoTransport)) {
            // set the owning side to null (unless already changed)
            if ($pictoTransport->getTherapist() === $this) {
                $pictoTransport->setTherapist(null);
            }
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
            $pictoVetement->setTherapist($this);
        }

        return $this;
    }

    public function removePictoVetement(PictoVetements $pictoVetement): self
    {
        if ($this->pictoVetements->removeElement($pictoVetement)) {
            // set the owning side to null (unless already changed)
            if ($pictoVetement->getTherapist() === $this) {
                $pictoVetement->setTherapist(null);
            }
        }

        return $this;
    }

    
}

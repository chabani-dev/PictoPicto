<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Cocur\Slugify\Slugify;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 * @Vich\Uploadable()
*/
 
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("category")
     * @Groups("pictogram")
     * @Groups("subcategory")
     
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("category")
     * @Groups("pictogram")
     * @Groups("subcategory")
     
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("category")
     * @Groups("pictogram")
     * @Groups("subcategory")
     */
    private $filename;


    /**
     * @var File
     * @Assert\Image(
     *     mimeTypes="image/png"
     * )
     * @Vich\UploadableField(mapping="category_image", fileNameProperty="filename")
     */
    private $illustration;

    // /**
    //  * @ORM\OneToMany(targetEntity=Pictogram::class, mappedBy="category")
    //  */
    // private $pictograms;



    /**
     * @ORM\Column(type="datetime")
     */
    private $update_at;

    /**
     * @ORM\ManyToMany(targetEntity=Question::class, mappedBy="category")
     * @ORM\JoinTable(name="question_category")
     */
    private $questions;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Therapist", inversedBy="categories")
     * @ORM\JoinColumn(nullable=true)
     */
    private $therapist;

    /**
     * @ORM\OneToMany(targetEntity=SubCategory::class, mappedBy="category_id", orphanRemoval=true)
     */
    private $subCategories;

    /**
     * @ORM\OneToMany(targetEntity=PictoFruitsLegumes::class, mappedBy="pictograms")
     */
    private $pictoFruitsLegumes;

    /**
     * @ORM\OneToMany(targetEntity=PictoActions::class, mappedBy="pictograms")
     */
    private $pictoActions;

    /**
     * @ORM\OneToMany(targetEntity=PictoAdjectifs::class, mappedBy="pictograms")
     */
    private $pictoAdjectifs;

    /**
     * @ORM\OneToMany(targetEntity=PictoAliments::class, mappedBy="pictograms")
     */
    private $pictoAliments;

    /**
     * @ORM\OneToMany(targetEntity=PictoAnimaux::class, mappedBy="pictograms")
     */
    private $pictoAnimauxes;

    /**
     * @ORM\OneToMany(targetEntity=PictoAutresMots::class, mappedBy="pictograms")
     */
    private $pictoAutresMots;

    /**
     * @ORM\OneToMany(targetEntity=PictoBoissons::class, mappedBy="pictograms")
     */
    private $pictoBoissons;

    /**
     * @ORM\OneToMany(targetEntity=PictoChiffres::class, mappedBy="pictograms")
     */
    private $pictoChiffres;

    /**
     * @ORM\OneToMany(targetEntity=PictoComportements::class, mappedBy="pictograms")
     */
    private $pictoComportements;

    /**
     * @ORM\OneToMany(targetEntity=PictoCorpsHumain::class, mappedBy="pictograms")
     */
    private $pictoCorpsHumains;

    /**
     * @ORM\OneToMany(targetEntity=PictoCouleurs::class, mappedBy="pictograms")
     */
    private $pictoCouleurs;

    /**
     * @ORM\OneToMany(targetEntity=PictoCouverts::class, mappedBy="pictograms")
     */
    private $pictoCouverts;

    /**
     * @ORM\OneToMany(targetEntity=PictoEmotions::class, mappedBy="pictograms")
     */
    private $pictoEmotions;

    /**
     * @ORM\OneToMany(targetEntity=PictoFormes::class, mappedBy="pictograms")
     */
    private $pictoFormes;

    /**
     * @ORM\OneToMany(targetEntity=PictoJouet::class, mappedBy="pictograms")
     */
    private $pictoJouets;

    /**
     * @ORM\OneToMany(targetEntity=PictoLanguesDesSignes::class, mappedBy="pictograms")
     */
    private $pictoLanguesDesSignes;

    /**
     * @ORM\OneToMany(targetEntity=PictoLieux::class, mappedBy="pictograms")
     */
    private $pictoLieuxes;

    /**
     * @ORM\OneToMany(targetEntity=PictoMeteo::class, mappedBy="pictograms")
     */
    private $pictoMeteos;

    /**
     * @ORM\OneToMany(targetEntity=PictoMultimedia::class, mappedBy="pictograms")
     */
    private $pictoMultimedia;

    /**
     * @ORM\OneToMany(targetEntity=PictoObjets::class, mappedBy="pictograms")
     */
    private $pictoObjets;

    /**
     * @ORM\OneToMany(targetEntity=PictoVetements::class, mappedBy="pictograms")
     */
    private $pictoVetements;

    /**
     * @ORM\OneToMany(targetEntity=PictoJournees::class, mappedBy="pictograms")
     */
    private $pictoJournees;

    /**
     * @ORM\OneToMany(targetEntity=PictoHeures::class, mappedBy="pictograms")
     */
    private $pictoHeures;

    /**
     * @ORM\OneToMany(targetEntity=PictoInterrogatif::class, mappedBy="pictograms")
     */
    private $pictoInterrogatifs;

    public function __construct()
    {
        // $this->pictograms = new ArrayCollection();
        $this->questions = new ArrayCollection();
        $this->subCategories = new ArrayCollection();
        $this->pictoFruitsLegumes = new ArrayCollection();
        $this->pictoActions = new ArrayCollection();
        $this->pictoAdjectifs = new ArrayCollection();
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
        $this->pictoJouets = new ArrayCollection();
        $this->pictoLanguesDesSignes = new ArrayCollection();
        $this->pictoLieuxes = new ArrayCollection();
        $this->pictoMeteos = new ArrayCollection();
        $this->pictoMultimedia = new ArrayCollection();
        $this->pictoObjets = new ArrayCollection();
        $this->pictoVetements = new ArrayCollection();
        $this->pictoJournees = new ArrayCollection();
        $this->pictoHeures = new ArrayCollection();
        $this->pictoInterrogatifs = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getName();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    // /**
    //  * @return Collection|Pictogram[]
    //  */
    // public function getPictograms(): Collection
    // {
    //     return $this->pictograms;
    // }

    // public function addPictogram(Pictogram $pictogram): self
    // {
    //     if (!$this->pictograms->contains($pictogram)) {
    //         $this->pictograms[] = $pictogram;
    //         $pictogram->setCategory($this);
    //     }

    //     return $this;
    // }

    // public function removePictogram(Pictogram $pictogram): self
    // {
    //     if ($this->pictograms->removeElement($pictogram)) {
    //         // set the owning side to null (unless already changed)
    //         if ($pictogram->getCategory() === $this) {
    //             $pictogram->setCategory(null);
    //         }
    //     }

    //     return $this;
    // }


    /**
     * Get mimeTypes="image/png"
     *
     * @return  File
     */ 
    public function getIllustration()
    {
        return $this->illustration;
    }

    /**
     * Set mimeTypes="image/png"
     *
     * @param  File  $illustration  mimeTypes="image/png"
     *
     * @return  self
     */ 
    public function setIllustration(File $illustration) : Category
    {
        $this->illustration = $illustration;
        if ($this->illustration instanceof UploadedFile) {
            $this->update_at = new \DateTime('now');
        }

        return $this;
    }

    /**
     * Get the value of filename
     */ 
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set the value of filename
     *
     * @return  self
     */ 
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->update_at;
    }

    public function setUpdateAt(\DateTimeInterface $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }

    /**
     * @return Collection|Question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
            $question->addCategory($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->removeElement($question)) {
            $question->removeCategory($this);
        }

        return $this;
    }

    /**
     * Get the value of therapist
     */ 
    public function getTherapist()
    {
        return $this->therapist;
    }

    /**
     * Set the value of therapist
     *
     * @return  self
     */ 
    public function setTherapist($therapist)
    {
        $this->therapist = $therapist;

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
            $subCategory->setCategoryId($this);
        }

        return $this;
    }

    public function removeSubCategory(SubCategory $subCategory): self
    {
        if ($this->subCategories->removeElement($subCategory)) {
            // set the owning side to null (unless already changed)
            if ($subCategory->getCategoryId() === $this) {
                $subCategory->setCategoryId(null);
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
            $pictoFruitsLegume->setPictograms($this);
        }

        return $this;
    }

    public function removePictoFruitsLegume(PictoFruitsLegumes $pictoFruitsLegume): self
    {
        if ($this->pictoFruitsLegumes->removeElement($pictoFruitsLegume)) {
            // set the owning side to null (unless already changed)
            if ($pictoFruitsLegume->getPictograms() === $this) {
                $pictoFruitsLegume->setPictograms(null);
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
            $pictoAction->setPictograms($this);
        }

        return $this;
    }

    public function removePictoAction(PictoActions $pictoAction): self
    {
        if ($this->pictoActions->removeElement($pictoAction)) {
            // set the owning side to null (unless already changed)
            if ($pictoAction->getPictograms() === $this) {
                $pictoAction->setPictograms(null);
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
            $pictoAdjectif->setPictograms($this);
        }

        return $this;
    }

    public function removePictoAdjectif(PictoAdjectifs $pictoAdjectif): self
    {
        if ($this->pictoAdjectifs->removeElement($pictoAdjectif)) {
            // set the owning side to null (unless already changed)
            if ($pictoAdjectif->getPictograms() === $this) {
                $pictoAdjectif->setPictograms(null);
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
            $pictoAliment->setPictograms($this);
        }

        return $this;
    }

    public function removePictoAliment(PictoAliments $pictoAliment): self
    {
        if ($this->pictoAliments->removeElement($pictoAliment)) {
            // set the owning side to null (unless already changed)
            if ($pictoAliment->getPictograms() === $this) {
                $pictoAliment->setPictograms(null);
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
            $pictoAnimaux->setPictograms($this);
        }

        return $this;
    }

    public function removePictoAnimaux(PictoAnimaux $pictoAnimaux): self
    {
        if ($this->pictoAnimauxes->removeElement($pictoAnimaux)) {
            // set the owning side to null (unless already changed)
            if ($pictoAnimaux->getPictograms() === $this) {
                $pictoAnimaux->setPictograms(null);
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
            $pictoAutresMot->setPictograms($this);
        }

        return $this;
    }

    public function removePictoAutresMot(PictoAutresMots $pictoAutresMot): self
    {
        if ($this->pictoAutresMots->removeElement($pictoAutresMot)) {
            // set the owning side to null (unless already changed)
            if ($pictoAutresMot->getPictograms() === $this) {
                $pictoAutresMot->setPictograms(null);
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
            $pictoBoisson->setPictograms($this);
        }

        return $this;
    }

    public function removePictoBoisson(PictoBoissons $pictoBoisson): self
    {
        if ($this->pictoBoissons->removeElement($pictoBoisson)) {
            // set the owning side to null (unless already changed)
            if ($pictoBoisson->getPictograms() === $this) {
                $pictoBoisson->setPictograms(null);
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
            $pictoChiffre->setPictograms($this);
        }

        return $this;
    }

    public function removePictoChiffre(PictoChiffres $pictoChiffre): self
    {
        if ($this->pictoChiffres->removeElement($pictoChiffre)) {
            // set the owning side to null (unless already changed)
            if ($pictoChiffre->getPictograms() === $this) {
                $pictoChiffre->setPictograms(null);
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
            $pictoComportement->setPictograms($this);
        }

        return $this;
    }

    public function removePictoComportement(PictoComportements $pictoComportement): self
    {
        if ($this->pictoComportements->removeElement($pictoComportement)) {
            // set the owning side to null (unless already changed)
            if ($pictoComportement->getPictograms() === $this) {
                $pictoComportement->setPictograms(null);
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
            $pictoCorpsHumain->setPictograms($this);
        }

        return $this;
    }

    public function removePictoCorpsHumain(PictoCorpsHumain $pictoCorpsHumain): self
    {
        if ($this->pictoCorpsHumains->removeElement($pictoCorpsHumain)) {
            // set the owning side to null (unless already changed)
            if ($pictoCorpsHumain->getPictograms() === $this) {
                $pictoCorpsHumain->setPictograms(null);
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
            $pictoCouleur->setPictograms($this);
        }

        return $this;
    }

    public function removePictoCouleur(PictoCouleurs $pictoCouleur): self
    {
        if ($this->pictoCouleurs->removeElement($pictoCouleur)) {
            // set the owning side to null (unless already changed)
            if ($pictoCouleur->getPictograms() === $this) {
                $pictoCouleur->setPictograms(null);
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
            $pictoCouvert->setPictograms($this);
        }

        return $this;
    }

    public function removePictoCouvert(PictoCouverts $pictoCouvert): self
    {
        if ($this->pictoCouverts->removeElement($pictoCouvert)) {
            // set the owning side to null (unless already changed)
            if ($pictoCouvert->getPictograms() === $this) {
                $pictoCouvert->setPictograms(null);
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
            $pictoEmotion->setPictograms($this);
        }

        return $this;
    }

    public function removePictoEmotion(PictoEmotions $pictoEmotion): self
    {
        if ($this->pictoEmotions->removeElement($pictoEmotion)) {
            // set the owning side to null (unless already changed)
            if ($pictoEmotion->getPictograms() === $this) {
                $pictoEmotion->setPictograms(null);
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
            $pictoForme->setPictograms($this);
        }

        return $this;
    }

    public function removePictoForme(PictoFormes $pictoForme): self
    {
        if ($this->pictoFormes->removeElement($pictoForme)) {
            // set the owning side to null (unless already changed)
            if ($pictoForme->getPictograms() === $this) {
                $pictoForme->setPictograms(null);
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
            $pictoJouet->setPictograms($this);
        }

        return $this;
    }

    public function removePictoJouet(PictoJouet $pictoJouet): self
    {
        if ($this->pictoJouets->removeElement($pictoJouet)) {
            // set the owning side to null (unless already changed)
            if ($pictoJouet->getPictograms() === $this) {
                $pictoJouet->setPictograms(null);
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
            $pictoLanguesDesSigne->setPictograms($this);
        }

        return $this;
    }

    public function removePictoLanguesDesSigne(PictoLanguesDesSignes $pictoLanguesDesSigne): self
    {
        if ($this->pictoLanguesDesSignes->removeElement($pictoLanguesDesSigne)) {
            // set the owning side to null (unless already changed)
            if ($pictoLanguesDesSigne->getPictograms() === $this) {
                $pictoLanguesDesSigne->setPictograms(null);
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
            $pictoLieux->setPictograms($this);
        }

        return $this;
    }

    public function removePictoLieux(PictoLieux $pictoLieux): self
    {
        if ($this->pictoLieuxes->removeElement($pictoLieux)) {
            // set the owning side to null (unless already changed)
            if ($pictoLieux->getPictograms() === $this) {
                $pictoLieux->setPictograms(null);
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
            $pictoMeteo->setPictograms($this);
        }

        return $this;
    }

    public function removePictoMeteo(PictoMeteo $pictoMeteo): self
    {
        if ($this->pictoMeteos->removeElement($pictoMeteo)) {
            // set the owning side to null (unless already changed)
            if ($pictoMeteo->getPictograms() === $this) {
                $pictoMeteo->setPictograms(null);
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
            $pictoMultimedia->setPictograms($this);
        }

        return $this;
    }

    public function removePictoMultimedia(PictoMultimedia $pictoMultimedia): self
    {
        if ($this->pictoMultimedia->removeElement($pictoMultimedia)) {
            // set the owning side to null (unless already changed)
            if ($pictoMultimedia->getPictograms() === $this) {
                $pictoMultimedia->setPictograms(null);
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
            $pictoObjet->setPictograms($this);
        }

        return $this;
    }

    public function removePictoObjet(PictoObjets $pictoObjet): self
    {
        if ($this->pictoObjets->removeElement($pictoObjet)) {
            // set the owning side to null (unless already changed)
            if ($pictoObjet->getPictograms() === $this) {
                $pictoObjet->setPictograms(null);
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
            $pictoVetement->setPictograms($this);
        }

        return $this;
    }

    public function removePictoVetement(PictoVetements $pictoVetement): self
    {
        if ($this->pictoVetements->removeElement($pictoVetement)) {
            // set the owning side to null (unless already changed)
            if ($pictoVetement->getPictograms() === $this) {
                $pictoVetement->setPictograms(null);
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
            $pictoJournee->setPictograms($this);
        }

        return $this;
    }

    public function removePictoJournee(PictoJournees $pictoJournee): self
    {
        if ($this->pictoJournees->removeElement($pictoJournee)) {
            // set the owning side to null (unless already changed)
            if ($pictoJournee->getPictograms() === $this) {
                $pictoJournee->setPictograms(null);
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
            $pictoHeure->setPictograms($this);
        }

        return $this;
    }

    public function removePictoHeure(PictoHeures $pictoHeure): self
    {
        if ($this->pictoHeures->removeElement($pictoHeure)) {
            // set the owning side to null (unless already changed)
            if ($pictoHeure->getPictograms() === $this) {
                $pictoHeure->setPictograms(null);
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
            $pictoInterrogatif->setPictograms($this);
        }

        return $this;
    }

    public function removePictoInterrogatif(PictoInterrogatif $pictoInterrogatif): self
    {
        if ($this->pictoInterrogatifs->removeElement($pictoInterrogatif)) {
            // set the owning side to null (unless already changed)
            if ($pictoInterrogatif->getPictograms() === $this) {
                $pictoInterrogatif->setPictograms(null);
            }
        }

        return $this;
    }
}

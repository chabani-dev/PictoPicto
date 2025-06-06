<?php

namespace App\Entity;

use App\Repository\PictoMultimediaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PictoMultimediaRepository::class)
 * @Vich\Uploadable()
 */
class PictoMultimedia
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("pictoMultimedia")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("pictoMultimedia")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("pictoMultimedia")
     */
    private $filename;

     /**
     * @var File
     * @Assert\Image(
     *     mimeTypes={"image/gif", "image/png"}
     * )
     * @Vich\UploadableField(mapping="pictogram_image", fileNameProperty="filename")
    */
    private $illustration;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $update_at;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $genre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $pluriel;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $prem_pers_sing;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $deux_pers_sing;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $trois_pers_sing;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $prem_pers_plur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $deux_pers_plur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $trois_pers_plur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $masculin_sing;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $masculin_plur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $feminin_sing;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $feminin_plur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $prem_pers_sing_futur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $deux_pers_sing_futur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $trois_pers_sing_futur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $prem_pers_plur_futur;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $deux_pers_plur_futur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $trois_pers_plur_futur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $prem_pers_sing_passe;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $deux_pers_sing_passe;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $trois_pers_sing_passe;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $prem_pers_plur_passe;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $deux_pers_plur_passe;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $trois_pers_plur_passe;
    
    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="pictoMultimedia")
     * @ORM\JoinColumn(nullable=true)
     * @Groups("pictoMultimedia")
     */
    private $pictograms;

    
    /**
     * @ORM\ManyToMany(targetEntity=Sentence::class, inversedBy="pictoMultimedia")
     */
    private $sentences;

    /**
     * @ORM\ManyToOne(targetEntity=Therapist::class, inversedBy="pictoMultimedia")
     */
    private $therapist;

    

    public function __construct()
    {
      
       // $this->categories = new ArrayCollection();
        $this->sentences = new ArrayCollection();
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

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeImmutable
    {
        return $this->update_at;
    }

    public function setUpdateAt(\DateTimeImmutable $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getPluriel(): ?string
    {
        return $this->pluriel;
    }

    public function setPluriel(?string $pluriel): self
    {
        $this->pluriel = $pluriel;

        return $this;
    }

    public function getPremPersSing(): ?string
    {
        return $this->prem_pers_sing;
    }

    public function setPremPersSing(?string $prem_pers_sing): self
    {
        $this->prem_pers_sing = $prem_pers_sing;

        return $this;
    }

    public function getDeuxPersSing(): ?string
    {
        return $this->deux_pers_sing;
    }

    public function setDeuxPersSing(?string $deux_pers_sing): self
    {
        $this->deux_pers_sing = $deux_pers_sing;

        return $this;
    }

    public function getTroisPersSing(): ?string
    {
        return $this->trois_pers_sing;
    }

    public function setTroisPersSing(?string $trois_pers_sing): self
    {
        $this->trois_pers_sing = $trois_pers_sing;

        return $this;
    }

    public function getPremPersPlur(): ?string
    {
        return $this->prem_pers_plur;
    }

    public function setPremPersPlur(?string $prem_pers_plur): self
    {
        $this->prem_pers_plur = $prem_pers_plur;

        return $this;
    }

    public function getDeuxPersPlur(): ?string
    {
        return $this->deux_pers_plur;
    }

    public function setDeuxPersPlur(?string $deux_pers_plur): self
    {
        $this->deux_pers_plur = $deux_pers_plur;

        return $this;
    }

    public function getTroisPersPlur(): ?string
    {
        return $this->trois_pers_plur;
    }

    public function setTroisPersPlur(?string $trois_pers_plur): self
    {
        $this->trois_pers_plur = $trois_pers_plur;

        return $this;
    }


    public function getMasculinSing(): ?string
    {
        return $this->masculin_sing;
    }

    public function setMasculinSing(?string $masculin_sing): self
    {
        $this->masculin_sing = $masculin_sing;

        return $this;
    }

    public function getMasculinPlur(): ?string
    {
        return $this->masculin_plur;
    }

    public function setMasculinPlur(?string $masculin_plur): self
    {
        $this->masculin_plur = $masculin_plur;

        return $this;
    }

    public function getFemininSing(): ?string
    {
        return $this->feminin_sing;
    }

    public function setFemininSing(?string $feminin_sing): self
    {
        $this->feminin_sing = $feminin_sing;

        return $this;
    }

    public function getFemininPlur(): ?string
    {
        return $this->feminin_plur;
    }

    public function setFemininPlur(?string $feminin_plur): self
    {
        $this->feminin_plur = $feminin_plur;

        return $this;
    }

    public function getPremPersSingFutur(): ?string
    {
        return $this->prem_pers_sing_futur;
    }

    public function setPremPersSingFutur(?string $prem_pers_sing_futur): self
    {
        $this->prem_pers_sing_futur = $prem_pers_sing_futur;

        return $this;
    }

    public function getDeuxPersSingFutur(): ?string
    {
        return $this->deux_pers_sing_futur;
    }

    public function setDeuxPersSingFutur(?string $deux_pers_sing_futur): self
    {
        $this->deux_pers_sing_futur = $deux_pers_sing_futur;

        return $this;
    }

    public function getTroisPersSingFutur(): ?string
    {
        return $this->trois_pers_sing_futur;
    }

    public function setTroisPersSingFutur(?string $trois_pers_sing_futur): self
    {
        $this->trois_pers_sing_futur = $trois_pers_sing_futur;

        return $this;
    }

    public function getPremPersPlurFutur(): ?string
    {
        return $this->prem_pers_plur_futur;
    }

    public function setPremPersPlurFutur(?string $prem_pers_plur_futur): self
    {
        $this->prem_pers_plur_futur = $prem_pers_plur_futur;

        return $this;
    }

    public function getDeuxPersPlurFutur(): ?string
    {
        return $this->deux_pers_plur_futur;
    }

    public function setDeuxPersPlurFutur(?string $deux_pers_plur_futur): self
    {
        $this->deux_pers_plur_futur = $deux_pers_plur_futur;

        return $this;
    }

    public function getTroisPersPlurFutur(): ?string
    {
        return $this->trois_pers_plur_futur;
    }

    public function setTroisPersPlurFutur(?string $trois_pers_plur_futur): self
    {
        $this->trois_pers_plur_futur = $trois_pers_plur_futur;

        return $this;
    }

    public function getPremPersSingPasse(): ?string
    {
        return $this->prem_pers_sing_passe;
    }

    public function setPremPersSingPasse(?string $prem_pers_sing_passe): self
    {
        $this->prem_pers_sing_passe = $prem_pers_sing_passe;

        return $this;
    }

    public function getDeuxPersSingPasse(): ?string
    {
        return $this->deux_pers_sing_passe;
    }

    public function setDeuxPersSingPasse(?string $deux_pers_sing_passe): self
    {
        $this->deux_pers_sing_passe = $deux_pers_sing_passe;

        return $this;
    }

    public function getTroisPersSingPasse(): ?string
    {
        return $this->trois_pers_sing_passe;
    }

    public function setTroisPersSingPasse(?string $trois_pers_sing_passe): self
    {
        $this->trois_pers_sing_passe = $trois_pers_sing_passe;

        return $this;
    }

    public function getPremPersPlurPasse(): ?string
    {
        return $this->prem_pers_plur_passe;
    }

    public function setPremPersPlurPasse(?string $prem_pers_plur_passe): self
    {
        $this->prem_pers_plur_passe = $prem_pers_plur_passe;

        return $this;
    }

    public function getDeuxPersPlurPasse(): ?string
    {
        return $this->deux_pers_plur_passe;
    }

    public function setDeuxPersPlurPasse(?string $deux_pers_plur_passe): self
    {
        $this->deux_pers_plur_passe = $deux_pers_plur_passe;

        return $this;
    }

    public function getTroisPersPlurPasse(): ?string
    {
        return $this->trois_pers_plur_passe;
    }

    public function setTroisPersPlurPasse(?string $trois_pers_plur_passe): self
    {
        $this->trois_pers_plur_passe = $trois_pers_plur_passe;

        return $this;
    }

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
    public function setIllustration(File $illustration)
    {
        $this->illustration = $illustration;
        if ($this->illustration instanceof UploadedFile) {
            $this->update_at = new \DateTime('now');
        }

        return $this;
    }

    public function getpictograms(): ?category
    {
        return $this->pictograms;
    }

    public function setpictograms(?category $pictograms): self
    {
        $this->pictograms = $pictograms;

        return $this;
    }

    
    /**
     * @return Collection<int, Sentence>
     */
    public function getSentences(): Collection
    {
        return $this->sentences;
    }

    public function addSentence(Sentence $sentence): self
    {
        if (!$this->sentences->contains($sentence)) {
            $this->sentences[] = $sentence;
        }

        return $this;
    }

    public function removeSentence(Sentence $sentence): self
    {
        $this->sentences->removeElement($sentence);

        return $this;
    }

    public function getTherapist(): ?Therapist
    {
        return $this->therapist;
    }

    public function setTherapist(?Therapist $therapist): self
    {
        $this->therapist = $therapist;

        return $this;
    }

   
}


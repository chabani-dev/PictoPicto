<?php

namespace App\Entity;

use App\Entity\Category;
use App\Entity\PictoLieux;
use App\Entity\PictoObjets;
use App\Entity\PictoPersonnes;
use App\Entity\PictoPetitsMots;
use App\Entity\Therapist;
use App\Repository\SubCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Serializer\Annotation\Groups;



/**
 * @ORM\Entity(repositoryClass=SubCategoryRepository::class)
 *  @Vich\Uploadable()
 */
class SubCategory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("subcategory")
     * @Groups("pictogram")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("subcategory")
     * @Groups("pictogram")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("subcategory")
     * @Groups("pictogram")
     */
    private $filename;

    /**
     * @var File
     * @Assert\Image(
     *     mimeTypes="image/png"
     * )
     * @Vich\UploadableField(mapping="subcategory_image", fileNameProperty="filename")
     */
    private $subillustration;

    /**
     * @ORM\Column(type="datetime")
     */
    private $update_at;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="subCategories")
     * @ORM\JoinColumn(nullable=false)
     * @Groups("subcategory")
     * @Groups("pictopetitsMots")
     * @Groups("pictoobjets")
     * @Groups("pictopersonnes")
     * @Groups("pictolieux")
     */
    private $category_id;

    /**
     * @ORM\ManyToOne(targetEntity=Therapist::class, inversedBy="subCategories")
     * @Groups("pictopetitsMots")
     * @Groups("pictoobjets")
     * @Groups("pictopersonnes")
     * @Groups("pictolieux")
     */
    private $therapist_id;

       
    /**
     * @ORM\OneToMany(targetEntity=PictoPetitsMots::class, mappedBy="subcategory_id")
     * @Groups("pictopetitsMots")
     */
    private $pictoPetitsMots;

    /**
     * @ORM\OneToMany(targetEntity=PictoObjets::class, mappedBy="subcategory_id")
     * @Groups("pictoobjets")
     */
    private $pictoObjets;

    /**
     * @ORM\OneToMany(targetEntity=PictoPersonnes::class, mappedBy="subcategory_id")
     * @Groups("pictopersonnes")
     */
    private $pictoPersonnes;

    /**
     * @ORM\OneToMany(targetEntity=PictoLieux::class, mappedBy="subcategory_id")
     * @Groups("pictolieux")
     */
    private $pictoLieuxes;

    
    public function __construct()
    {
        // $this->pictograms_id = new ArrayCollection();
        // $this->subcategory_id =new ArrayCollection();
        $this->pictoPetitsMots = new ArrayCollection();
        $this->pictoObjets = new ArrayCollection();
        $this->pictoPersonnes = new ArrayCollection();
        $this->pictoLieuxes = new ArrayCollection();
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

    /**
     * Get mimeTypes="image/png"
     *
     * @return  File
     */ 
    public function getSubIllustration()
    {
        return $this->subillustration;
    }

    /**
     * Set mimeTypes="image/png"
     *
     * @param  File  $subillustration  mimeTypes="image/png"
     *
     * @return  self
     */ 
    public function setSubIllustration(File $subillustration) : SubCategory
    {
        $this->subillustration = $subillustration;
        if ($this->subillustration instanceof UploadedFile) {
            $this->update_at = new \DateTime('now');
        }

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

    public function getCategoryId(): ?category
    {
        return $this->category_id;
    }

    public function setCategoryId(?Category $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getTherapistId(): ?Therapist
    {
        return $this->therapist_id;
    }

    public function setTherapistId(?therapist $therapist_id): self
    {
        $this->therapist_id = $therapist_id;

        return $this;
    }

    // /**
    //  * @return Collection|PictoLieux[]
    //  */
    // public function getPictogramsId(): Collection
    // {
    //     return $this->pictograms_id;
    // }

    // public function addPictogramsId(PictoLieux $pictogramsId): self
    // {
    //     if (!$this->pictograms_id->contains($pictogramsId)) {
    //         $this->pictograms_id[] = $pictogramsId;
    //         $pictogramsId->setSubcategoryId($this);
    //     }

    //     return $this;
    // }

    // public function removePictogramsId(PictoLieux $pictogramsId): self
    // {
    //     if ($this->pictograms_id->removeElement($pictogramsId)) {
    //         // set the owning side to null (unless already changed)
    //         if ($pictogramsId->getSubcategoryId() === $this) {
    //             $pictogramsId->setSubcategoryId(null);
    //         }
    //     }

    //     return $this;
    // }

 
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
            $pictoPetitsMot->setSubcategoryId($this);
        }

        return $this;
    }

    public function removePictoPetitsMot(PictoPetitsMots $pictoPetitsMot): self
    {
        if ($this->pictoPetitsMots->removeElement($pictoPetitsMot)) {
            // set the owning side to null (unless already changed)
            if ($pictoPetitsMot->getSubcategoryId() === $this) {
                $pictoPetitsMot->setSubcategoryId(null);
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
            $pictoObjet->setSubcategoryId($this);
        }

        return $this;
    }

    public function removePictoObjet(PictoObjets $pictoObjet): self
    {
        if ($this->pictoObjets->removeElement($pictoObjet)) {
            // set the owning side to null (unless already changed)
            if ($pictoObjet->getSubcategoryId() === $this) {
                $pictoObjet->setSubcategoryId(null);
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
            $pictoPersonne->setSubcategoryId($this);
        }

        return $this;
    }

    public function removePictoPersonne(PictoPersonnes $pictoPersonne): self
    {
        if ($this->pictoPersonnes->removeElement($pictoPersonne)) {
            // set the owning side to null (unless already changed)
            if ($pictoPersonne->getSubcategoryId() === $this) {
                $pictoPersonne->setSubcategoryId(null);
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
            $pictoLieux->setSubcategoryId($this);
        }

        return $this;
    }

    public function removePictoLieux(PictoLieux $pictoLieux): self
    {
        if ($this->pictoLieuxes->removeElement($pictoLieux)) {
            // set the owning side to null (unless already changed)
            if ($pictoLieux->getSubcategoryId() === $this) {
                $pictoLieux->setSubcategoryId(null);
            }
        }

        return $this;
    }

       
    public function __toString() {
return $this->name;
}

}

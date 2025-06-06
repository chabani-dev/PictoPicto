<?php

namespace App\Form;

use App\Entity\PictoPetitsMots;
use App\Entity\Category;
use App\Entity\SubCategory;
use App\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PictoPetitsMotsType extends AbstractType
{
    private $repo;
    
      public function __construct(CategoryRepository $repo)
    {
        $this->repo = $repo;
        
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
       
            ->add('name', TextType::class, [
                'label' => 'Nom du pictogramme*:',
                'required' => true,
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min'=>2,
                        'max' => 50,
                        'minMessage'=> 'Le nom du pictogramme est trop court. Il doit avoir au minimum 2 caractères.',
                        'maxMessage'=> 'Le nom du pictogramme est trop long. Il doit avoir au maximum 50 caractères.',
                    ])
                ]
            ])
            ->add('illustration', FileType::class, [
                'label' => 'Illustration du pictogramme*: ',
                'required' => true,
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new File([ 
                        'mimeTypes' => [
                            'image/gif', 'image/png',
                        ],
                        'mimeTypesMessage' => "Veuillez insérer un fichier au format png ou gif.",
                      ])
                    ],
                  ])
           
            ->add('pictograms', EntityType::class, [
                'label' => 'Pictogramme Petits Mots :',
                'required' => false,
                'class' => Category::class,
                'choice_label' => 'name',
                 'choices' => $this->repo->findBy(['name' => 'Petits mots']),
                'attr' => [
                    'class' => 'form-select'
                ],
            ])
            ->add('subcategory_id', EntityType::class, [
                'label' => 'Sous-Catégorie du nouveau pictogramme :',
                'required' => false,
                'class' => SubCategory::class,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select'
                ],
            ])
            ->add('genre', TextType::class, [
                'label' => 'Genre du mot:',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('pluriel', TextType::class, [
                'label' => 'Pluriel du mot:',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('prem_pers_sing', TextType::class, [
                'label' => 'Première personne du singulier: ',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('deux_pers_sing', TextType::class, [
                'label' => 'Deuxième personne du singulier: ',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('trois_pers_sing', TextType::class, [
                'label' => 'Troisième personne du singulier: ',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('prem_pers_plur', TextType::class, [
                'label' => 'Première personne du pluriel: ',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('deux_pers_plur', TextType::class, [
                'label' => 'Deuxième personne du pluriel: ',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('trois_pers_plur', TextType::class, [
                'label' => 'Troisième personne du pluriel: ',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            
            ->add('masculin_sing', TextType::class, [
                'label' => 'Masculin singulier du mot:',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])  
            ->add('masculin_plur', TextType::class, [
                'label' => 'Masculin pluriel du mot:',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('feminin_sing', TextType::class, [
                'label' => 'Féminin singulier du mot:',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('feminin_plur', TextType::class, [
                'label' => 'Féminin pluriel du mot:',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label'=>'Ajouter un pictogramme',
                'attr' => [
                    'class' => 'btn btn-sm py-2 px-3'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PictoPetitsMots::class,
        ]);
    }
}

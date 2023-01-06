<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\PictoActionsRepository;
use App\Repository\PictoAdjectifsRepository;
use App\Repository\PictoAlimentsRepository;
use App\Repository\PictoAnimauxRepository;
use App\Repository\PictoAutresMotsRepository;
use App\Repository\PictoBoissonsRepository;
use App\Repository\PictoChiffresRepository;
use App\Repository\PictoComportementsRepository;
use App\Repository\PictoCorpsHumainRepository;
use App\Repository\PictoCouleursRepository;
use App\Repository\PictoCouvertsRepository;
use App\Repository\PictoEmotionsRepository;
use App\Repository\PictoFormesRepository;
use App\Repository\PictoFruitsLegumesRepository;
use App\Repository\PictogramRepository;
use App\Repository\PictoHeuresRepository;
use App\Repository\PictoInterrogatifRepository;
use App\Repository\PictoJouetRepository;
use App\Repository\PictoJourneesRepository;
use App\Repository\PictoLanguesDesSignesRepository;
use App\Repository\PictoLieuxRepository;
use App\Repository\PictoMeteoRepository;
use App\Repository\PictoMultimediaRepository;
use App\Repository\PictoObjetsRepository;
use App\Repository\PictoOrientationRepository;
use App\Repository\PictoPersonnesRepository;
use App\Repository\PictoPetitsMotsRepository;
use App\Repository\PictoScolariteRepository;
use App\Repository\PictoSecuriteRoutiereRepository;
use App\Repository\PictoSportsRepository;
use App\Repository\PictoSujetsRepository;
use App\Repository\PictoTransportsRepository;
use App\Repository\PictoVetementsRepository;
use App\Repository\SubCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PictoPictoController extends AbstractController
{

    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(PictoActionsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/pictopicto", name="app_picto_picto")
     */
    public function index(PictoActionsRepository $action, PictoAdjectifsRepository $adjectif, PictoAlimentsRepository $aliment , PictoAnimauxRepository $animaux ,PictoAutresMotsRepository $autresMots ,PictoBoissonsRepository $boisson, PictoChiffresRepository $chiffre , PictoComportementsRepository $comportement , PictoCorpsHumainRepository $corpshumain , PictoCouleursRepository $couleur , PictoCouvertsRepository $couvert , PictoEmotionsRepository $emotion , PictoFormesRepository $forme , PictoFruitsLegumesRepository $fruitlegume , PictoHeuresRepository $heure , PictoInterrogatifRepository $interrogatif, PictoJouetRepository $joue , PictoJourneesRepository $journee , PictoLanguesDesSignesRepository $languedessignes , PictoMeteoRepository $meteo , PictoMultimediaRepository $multimedia , PictoOrientationRepository $orientation, PictoScolariteRepository $scolarite ,PictoSecuriteRoutiereRepository $securiteroutiere , PictoSportsRepository $sport , PictoSujetsRepository $sujet , PictoTransportsRepository $transport , PictoVetementsRepository $vetement, CategoryRepository $categoryRepository, SubCategoryRepository $subCategoryRepository, PictoLieuxRepository $pictoLieuxRepository, PictoObjetsRepository $pictoObjetsRepository, PictoPersonnesRepository $pictoPersonnesRepository, PictoPetitsMotsRepository $pictoPetitsMotsRepository ): Response
    {
        $array = [];
        $array2 = [];
        $actionArray = $action->findAll();
        array_push($array, $actionArray);
        // dd($actionArray);
        $adjectifArray = $adjectif->findAll();
        array_push($array, $adjectifArray);

        $alimentArray = $aliment->findAll();
        array_push($array, $alimentArray);
        //dd($alimentArray);

        $animauxArray = $animaux->findAll();
        array_push($array, $animauxArray);

        $autresMotsArray = $autresMots->findAll();
        array_push($array, $autresMotsArray);

        $boissonArray = $boisson->findAll();
        array_push($array, $boissonArray);

        $chiffreArray = $chiffre->findAll();
        array_push($array, $chiffreArray);

        $comportementArray = $comportement->findAll();
        array_push($array, $comportementArray);

        $corpshumainArray = $corpshumain->findAll();
        array_push($array, $corpshumainArray);

        $couleurArray = $couleur->findAll();
        array_push($array, $couleurArray);

        $couvertArray = $couvert->findAll();
        array_push($array, $couvertArray);

        $emotionArray = $emotion->findAll();
        array_push($array, $emotionArray);

        $formeArray = $forme->findAll();
        array_push($array, $formeArray);

        $fruitlegumeArray = $fruitlegume->findAll();
        array_push($array, $fruitlegumeArray);

        $heureArray = $heure->findAll();
        array_push($array, $heureArray);

        $interrogatifArray = $interrogatif->findAll();
        array_push($array, $interrogatifArray);


        $joueArray = $joue->findAll();
        array_push($array, $joueArray);

        $journeeArray = $journee->findAll();
        array_push($array, $journeeArray);


        $meteoArray = $meteo->findAll();
        array_push($array, $meteoArray);

        $multimediaArray = $multimedia->findAll();
        array_push($array, $multimediaArray);

        $orientationArray = $orientation->findAll();
        array_push($array, $orientationArray);


        $scolariteArray = $scolarite->findAll();
        array_push($array, $scolariteArray);

        $securiteroutiereArray = $securiteroutiere->findAll();
        array_push($array, $securiteroutiereArray);


        $sportArray = $sport->findAll();
        array_push($array, $sportArray);

        $sujetArray = $sujet->findAll();
        array_push($array, $sujetArray);


        $transportArray = $transport->findAll();
        array_push($array, $transportArray);

        $vetementArray = $vetement->findAll();
        array_push($array, $vetementArray);

        $languedessignesArray = $languedessignes->findAll();
        array_push($array, $languedessignesArray);

        $subCategoriesArray = $subCategoryRepository->findAll();
        $categoriesArray = $categoryRepository->findAll();
        foreach($categoriesArray as $category){
        foreach($subCategoriesArray as $subCategory){
            if($subCategory->getCategoryId()==$category && !in_array($category, $array2)){
                array_push($array2, $category);
            }
        }}
        $pict = [];
        array_push($pict, $pictoLieuxRepository->findAll());
        array_push($pict, $pictoObjetsRepository->findAll());
        array_push($pict, $pictoPersonnesRepository->findAll());
        array_push($pict, $pictoPetitsMotsRepository->findAll());
        
        return $this->render('PictoPicto/index2.html.twig', [
            'array' => $array,
            'array2' => $array2,
            'subCategories' => $subCategoriesArray,
            'pict' => $pict,
        ]);
    }
}

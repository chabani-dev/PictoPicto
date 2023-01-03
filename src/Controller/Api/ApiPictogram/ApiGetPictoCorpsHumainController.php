<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoCorpsHumainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoCorpsHumainController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoCorpsHumainRepository $PictoCorpsHumainRepository
     * @Route("/api/get/PictoCorpsHumain", name="api_get_index_CorpsHumain", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoCorpsHumainRepository $PictoCorpsHumainRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoCorpsHumainRepository->findAll(),200,[],['groups'=>'pictocorpshumain']);
    }

}
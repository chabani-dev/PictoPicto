<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoHeuresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoHeuresController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoHeuresRepository $PictoHeuresRepository
     * @Route("/api/get/PictoHeures", name="api_get_index_Heures", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoHeuresRepository $PictoHeuresRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoHeuresRepository->findAll(),200,[],['groups'=>'pictoheures']);
    }

}
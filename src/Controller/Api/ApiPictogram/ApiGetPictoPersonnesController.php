<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoPersonnesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoPersonnesController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoPersonnesRepository $PictoPersonnesRepository
     * @Route("/api/get/pictoPersonnes", name="api_get_index_Personnes", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoPersonnesRepository $PictoPersonnesRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoPersonnesRepository->findAll(),200,[],['groups'=>'pictoPersonnes']);
    }

}
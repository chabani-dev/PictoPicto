<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoJourneesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoJourneesController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoJourneesRepository $PictoJourneesRepository
     * @Route("/api/get/pictoJournees", name="api_get_index_Journees", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoJourneesRepository $PictoJourneesRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoJourneesRepository->findAll(),200,[],['groups'=>'pictoJournees']);
    }

}
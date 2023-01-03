<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoAnimauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoAnimauxController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoAnimauxRepository $PictoAnimauxRepository
     * @Route("/api/get/PictoAnimaux", name="api_get_index_Animaux", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoAnimauxRepository $PictoAnimauxRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoAnimauxRepository->findAll(),200,[],['groups'=>'pictoanimaux']);
    }

}
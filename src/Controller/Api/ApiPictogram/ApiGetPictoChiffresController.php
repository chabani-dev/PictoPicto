<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoChiffresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoChiffresController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoChiffresRepository $PictoChiffresRepository
     * @Route("/api/get/PictoChiffres", name="api_get_index_Chiffres", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoChiffresRepository $PictoChiffresRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoChiffresRepository->findAll(),200,[],['groups'=>'pictochiffres']);
    }

}
<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoVetementsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoVetementsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoVetementsRepository $PictoVetementsRepository
     * @Route("/api/get/PictoVetements", name="api_get_index_Vetements", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoVetementsRepository $PictoVetementsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoVetementsRepository->findAll(),200,[],['groups'=>'pictovetements']);
    }

}
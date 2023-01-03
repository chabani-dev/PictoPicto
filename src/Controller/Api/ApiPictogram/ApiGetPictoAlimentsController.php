<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoAlimentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoAlimentsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoAlimentsRepository $PictoAlimentsRepository
     * @Route("/api/get/PictoAliments", name="api_get_index_Aliments", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoAlimentsRepository $PictoAlimentsRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoAlimentsRepository->findAll(),200,[],['groups'=>'pictoaliments']);
    }

}
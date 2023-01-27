<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoCouleursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiGetPictoCouleursController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoCouleursRepository $PictoCouleursRepository
     * @Route("/api/get/pictoCouleurs", name="api_get_index_Couleurs", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoCouleursRepository $PictoCouleursRepository)
    {
        //récupère toutes les catégories et retourne une réponse Json
        return  $this->json($PictoCouleursRepository->findAll(),200,[],['groups'=>'pictoCouleurs']);
    }

}
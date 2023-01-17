<?php

namespace App\Controller\Api\ApiPictogram;

use App\Repository\PictoActionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiGetPictoActionsController extends AbstractController
{

    /**
     * Serialiser et normalise toutes les catégories et les envoie dans au format Json
     * @param PictoActionsRepository $PictoActionsRepository
     * @Route("api/get/pictoActions", name="api_get_index_Actions", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(PictoActionsRepository $pictoActionsRepository)
    {
    //  $actions = $pictoActionsRepository->findAll();
    //  return $this->json($actions, 200, [], [
    //   'groups' => ['pictoActions'],
    //   'enable_max_depth' => true,
// ]);
        //récupère toutes les catégories et retourne une réponse Json
     return  $this->json($pictoActionsRepository->findAll(),200,[],['groups'=>'pictoActions']);
    }

}

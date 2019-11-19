<?php

namespace App\Controller;

use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MenuController extends AbstractController
{
   //pas de route : c'est une vue partielle

    public function _menu()
    {
        $repository=$this->getDoctrine()->getRepository(Categorie::class);
        $categories=$repository->findAll();

        return $this->render('menu/_menu.html.twig', [
            "categories"=>$categories,
        ]);
    }
}

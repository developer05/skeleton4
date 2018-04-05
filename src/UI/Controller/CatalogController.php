<?php

namespace App\Controller\UI;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends Controller
{
    /**
     * @Route("/", name="catalog")
     */
    public function index()
    {
        return $this->render('catalog/index.html.twig');
    }
}

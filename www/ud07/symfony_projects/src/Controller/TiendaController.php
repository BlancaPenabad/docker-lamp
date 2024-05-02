<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TiendaController extends AbstractController{

    #[Route('/')]
    public function homepage(){

        $productos = [
            'Molete pan',
            'Barra trigo país',
            'Barra integral',
            'Chapata',
            'Molete centeno'
        ];

        return $this->render('tienda/homepage.html.twig',[
            'titulo' => 'Tienda Blanca',
            'productos' => $productos,

        ]);
    }
}


?>
<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TiendaController extends AbstractController{

    private $productos;
    private $nombre;

    public function __construct() {
        
        $this->productos = [
            ['descripcion' =>'Baguette', 
            'foto' => 'images/baguette.jpeg',
            'precio' => '2,50€'],

            ['descripcion' => 'Boule', 
            'foto' => 'images/boule.jpeg',
            'precio' => '1,50€'],

            ['descripcion' => 'Bretzel', 
            'foto' => 'images/bretzel.jpeg',
            'precio' => '1,50€'],

            ['descripcion' => 'Brioche', 
            'foto' => 'images/brioche.jpeg',
            'precio' => '1,50€'],

            
            ['descripcion' => 'Croissant',
             'foto' => 'images/croissant.jpg',
             'precio' => '1,20€'],

            ['descripcion' => 'Pain au chocolat', 
            'foto' => 'images/painauchocolat.jpeg',
            'precio' => '1,50€'],

            ['descripcion' => 'Galette', 
            'foto' => 'images/galette.jpg',
            'precio' => '1,50€'],

            ['descripcion' => 'Éclairs', 
            'foto' => 'images/eclairs.jpeg',
            'precio' => '1,50€'],

            ['descripcion' => 'Paris-brest', 
            'foto' => 'images/paris-brest.jpeg',
            'precio' => '1,50€']

            
            
        ];

        $this->nombre = 'Boulangerie LeBlanc';
    }

        

        #[Route('/')]
    public function homepage(){
        return $this->render('tienda/homepage.html.twig',[
            'titulo' => $this->nombre,
            'productos' => $this->productos

        ]);
    }


    #[Route('/boulangerie')]
    public function boulangerie(){
        return $this->render('tienda/boulangerie.html.twig',[
            'titulo' => $this->nombre,
            'productos' => $this->productos

        ]);
    }
}


?>
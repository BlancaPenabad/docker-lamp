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

            ['descripcion' => 'Brioche', 
            'foto' => 'images/brioche.jpeg',
            'precio' => '1,50€'],

            ['descripcion' => 'Croissant mantequilla',
             'foto' => 'images/croissant.jpg',
             'precio' => '1,20€'],

            ['descripcion' => 'Pain au chocolat', 
            'foto' => 'images/painauchocolat.jpeg',
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
}


?>
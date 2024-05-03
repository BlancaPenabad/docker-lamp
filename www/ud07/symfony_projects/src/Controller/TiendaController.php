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
            ['id' => '1',
            'descripcion' =>'Baguette', 
            'foto' => 'images/baguette.jpeg',
            'precio' => '2,50€'],

            ['id' => '2',
            'descripcion' => 'Boule', 
            'foto' => 'images/boule.jpeg',
            'precio' => '1,50€'],

            ['id' => '3',
            'descripcion' => 'Bretzel', 
            'foto' => 'images/bretzel.jpg',
            'precio' => '1,50€'],

            ['id' => '4',
            'descripcion' => 'Brioche', 
            'foto' => 'images/brioche.jpeg',
            'precio' => '1,50€'],

            
            ['id' => '5',
            'descripcion' => 'Croissant',
             'foto' => 'images/croissant.jpg',
             'precio' => '1,20€'],

            ['id' => '6',
            'descripcion' => 'Pain au chocolat', 
            'foto' => 'images/painauchocolat.jpeg',
            'precio' => '1,50€'],

            ['id' => '7',
            'descripcion' => 'Galette', 
            'foto' => 'images/galette.jpg',
            'precio' => '1,50€'],

            ['id' => '8',
            'descripcion' => 'Éclairs', 
            'foto' => 'images/eclairs.jpeg',
            'precio' => '1,50€'],

            ['id' => '9',
            'descripcion' => 'Paris-brest', 
            'foto' => 'images/paris-brest.jpg',
            'precio' => '1,50€']

            
            
        ];

        $this->nombre = 'LeBlanc boulangerie & pattiserie';
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

    #[Route('/pattiserie')]
    public function pattiserie(){
        return $this->render('tienda/pattiserie.html.twig',[
            'titulo' => $this->nombre,
            'productos' => $this->productos

        ]);
    }

    #[Route('/detalles/{id}', 'detalles-producto')]
    public function detalles($id){
        $productoElegido = null;
        foreach ($this->productos as $producto){
            if($producto['id'] === $id){
                $productoElegido = $producto;
                break;
            }
        }

        $descripcion = $productoElegido['descripcion'];
    
        return $this->render('tienda/detalles.html.twig',[
            'titulo' => $descripcion,
            'producto' => $productoElegido,
            'foto' => $productoElegido['foto']

        ]);
    }
}


?>
<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TiendaController extends AbstractController{

    private $productos;
    private $nombre;

    public function __construct() {
    

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
    public function boulangerie(HttpClientInterface $httpClient) : Response{
        
        $response = $httpClient->request('GET', 'https://raw.githubusercontent.com/BlancaPenabad/docker-lamp/main/www/ud08/symfony_projects/public/data/data.json?token=GHSAT0AAAAAACQONLUN5R4Z4XHPSHLNNXAIZSTLP2A');
        $productosI = $response->toArray();
        return $this->render('tienda/boulangerie.html.twig',[
            'titulo' => $this->nombre,
            'productos' => $productosI,

        ]);
    }

    

    #[Route('/detalles/{id}', 'detalles-producto')]
    public function detalles(HttpClientInterface $httpClient ,$id) : Response{
        $response = $httpClient->request('GET', 'https://raw.githubusercontent.com/BlancaPenabad/docker-lamp/main/www/ud08/symfony_projects/public/data/data.json?token=GHSAT0AAAAAACQONLUN5R4Z4XHPSHLNNXAIZSTLP2A');
        $productosI = $response->toArray();

        $id = (int)$id;
        $productoElegido = null;
        foreach ($productosI as $producto){
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
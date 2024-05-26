<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\CacheItemInterface;


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
    public function boulangerie(HttpClientInterface $httpClient, CacheInterface $cache) : Response{
        
        $productosI = $cache->get('productos_data', function(CacheItemInterface $cacheItem) use($httpClient){
            $cacheItem->expiresAfter(10);
            $response = $httpClient->request('GET', 'https://raw.githubusercontent.com/BlancaPenabad/repoB/main/data.json');
            return $response->toArray();
        });
        
        return $this->render('tienda/boulangerie.html.twig',[
            'titulo' => $this->nombre,
            'productos' => $productosI,

        ]);
    }

    

    #[Route('/detalles/{id}', 'detalles-producto')]
    public function detalles(HttpClientInterface $httpClient ,$id) : Response{
        $response = $httpClient->request('GET', 'https://raw.githubusercontent.com/BlancaPenabad/repoB/main/data.json');
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
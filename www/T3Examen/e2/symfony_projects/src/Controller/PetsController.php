<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Psr\Cache\CacheItemInterface;

class PetsController extends AbstractController{

    private $pets;
    private $nombre;

    public function __construct(){
        $this->nombe = 'Tienda animales Garritas';
    }


   


    #[Route('/petscache')]
    public function pets(HttpClientInterface $httpClient, CacheInterface $cache) : Response{
        
        $petsI = $cache->get('pet_data', function(CacheItemInterface $cacheItem) use($httpClient){
            $cacheItem->expiresAfter(2);
            $response = $httpClient->request('GET', 'https://raw.githubusercontent.com/BlancaPenabad/repoB/main/pets.json');
            return $response->toArray();
        });
        
        return $this->render('pets/petscache.html.twig',[
            'titulo' => $this->nombre,
            'pets' => $petsI,

        ]);
    }
}


?>
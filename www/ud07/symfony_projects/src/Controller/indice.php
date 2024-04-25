<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrimerController{
    #[Route('/')]
    public function homepage(){
        return new Response("Primera página con Symfony hecha por Blanca Penabad Villar.");
    }
}
?>
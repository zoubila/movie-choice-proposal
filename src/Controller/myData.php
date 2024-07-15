<?php

namespace App\Controller;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;


class myData
{
    #[Route('/data')]
    public function showData(): Response
    {
        if(isset($_COOKIE) && !empty($_COOKIE)){
            $data = $_COOKIE;
        }else{
            $data = "yoloo";
        }
        return new Response(
            '<html><body>Lucky number: '.var_dump($data).'</body></html>'
        );
    }
}

?>
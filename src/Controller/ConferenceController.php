<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {
        $greet = '';
        if ($name = $request->query->get('hello')) {
            $greet = sprintf('<h1>Hello %s !</h1>', htmlspecialchars(string: $name));
        }
     return new Response(<<<EOF
                <html>
                   <body>
                        $greet
                        <img src="/images/website-under-construction-image-6.gif" />
                    </body>
                </html>
                EOF
                        );
    }
}

<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloWorldController {

    public function hello()
    {
        return new Response('Hello world!');
    }

}

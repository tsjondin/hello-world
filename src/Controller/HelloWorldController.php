<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HellowWorldController
{

    public function hello()
    {
        return new Response(
            'Hello world!'
        );
    }
}

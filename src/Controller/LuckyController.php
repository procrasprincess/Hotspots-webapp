<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
  public function number() {
    $number = random_int(0, 100);

    return new Response(
      "<html><body>LUCKY NUMBER: $number</body></html>"
    );
  }
}
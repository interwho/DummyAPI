<?php
namespace RequestCity\DummyAPI\Controllers;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class PageController
 * @package RequestCity\DummyAPI\Controllers
 */
class PageController extends Controller
{
    public function root()
    {
        return $this->createResponse('pong', Response::HTTP_CONTINUE);
    }
}

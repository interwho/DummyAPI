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
        return $this->createResponse('pong', Response::HTTP_OK);
    }

    public function usersGet()
    {
        return $this->createResponse('pong', Response::HTTP_OK);
    }

    public function authenticationGet()
    {
        return $this->createResponse('pong', Response::HTTP_OK);
    }

    public function postsGet()
    {
        return $this->createResponse('pong', Response::HTTP_OK);
    }

    public function loginGet()
    {
        return $this->createResponse('pong', Response::HTTP_OK);
    }
}

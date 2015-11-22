<?php
namespace RequestCity\DummyAPI\Controllers;

use Httpful\Request;
use Symfony\Component\HttpFoundation\Response;
use Exception;

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

    //

    public function logrotate()
    {
        return $this->createResponse('pong', Response::HTTP_OK);
    }

    public function logsearch()
    {
        return $this->createResponse('132', Response::HTTP_OK);
    }

    //

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

    public function logoutGet()
    {
        return $this->createResponse('pong', Response::HTTP_OK);
    }
}

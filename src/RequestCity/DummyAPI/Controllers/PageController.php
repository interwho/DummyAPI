<?php
namespace RequestCity\DummyAPI\Controllers;

use Predis\Client;
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

    // Log Routes

    public function logrotate()
    {
        foreach (file("/var/log/apache2/access.log") as $logLine) {
            $logLine = trim($logLine);
            $logLine = explode(' ', $logLine);

            $currCount = $this->get($logLine[6], $logLine[8]);

            if (!$currCount) {
                $currCount = 0;
            }

            $currCount = $currCount + 1;

            $this->set($logLine[6], $logLine[8], $currCount, 12123600);
        }

        exec('truncate -s 0 /var/log/apache2/access.log');

        return $this->createResponse('done', Response::HTTP_OK);
    }

    public function logsearch()
    {
        $currCount = $this->get($this->params['route'], $this->params['status']);

        return $this->createResponse($currCount, Response::HTTP_OK);
    }

    public function clear()
    {
        (new Client())->flushdb();

        return $this->createResponse('done', Response::HTTP_OK);
    }

    // Dummy Routes

    public function usersGet()
    {
        $responses = [
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_INTERNAL_SERVER_ERROR
        ];

        shuffle($responses);

        return $this->createResponse('pong', array_shift($responses));
    }

    public function authenticationGet()
    {
        $responses = [
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_INTERNAL_SERVER_ERROR,
            Response::HTTP_INTERNAL_SERVER_ERROR,
            Response::HTTP_INTERNAL_SERVER_ERROR,
            Response::HTTP_INTERNAL_SERVER_ERROR,
            Response::HTTP_INTERNAL_SERVER_ERROR
        ];

        shuffle($responses);

        return $this->createResponse('pong', array_shift($responses));
    }

    public function postsGet()
    {
        $responses = [
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_INTERNAL_SERVER_ERROR,
            Response::HTTP_INTERNAL_SERVER_ERROR
        ];

        shuffle($responses);

        return $this->createResponse('pong', array_shift($responses));
    }

    public function logoutGet()
    {
        $responses = [
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_OK,
            Response::HTTP_INTERNAL_SERVER_ERROR
        ];

        shuffle($responses);

        return $this->createResponse('pong', array_shift($responses));
    }
}

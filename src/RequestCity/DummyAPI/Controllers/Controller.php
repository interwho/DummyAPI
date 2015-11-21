<?php
namespace RequestCity\DummyAPI\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Class Controller
 * @package RequestCity\DummyAPI\Controllers
 */
abstract class Controller
{
    /**
     * @var array
     */
    protected $params;

    /**
     * @var array
     */
    protected $files;

    /**
     * @var Session
     */
    protected $session;

    /**
     * Controller Initializer
     */
    public function __construct()
    {
        $this->session = new Session();
        $this->session->start();
        $this->params = $_REQUEST;
        $this->files = $_FILES;
    }

    /**
     * @param array $params
     */
    public function setParams(array $params)
    {
        $this->params = $params;
    }

    /**
     * Return a formatted response object
     *
     * @param string  $content
     * @param integer $response
     * @param string  $type
     * @return Response
     */
    protected function createResponse($content, $response, $type = 'text/html')
    {
        return new Response(
            $content,
            $response,
            array('content-type' => $type)
        );
    }
}

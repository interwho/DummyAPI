<?php
namespace RequestCity\DummyAPI\Controllers;

use Predis\Client;
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

    /**
     * Get data from the Redis Cache
     *
     * @param $type
     * @param $key
     * @return string
     */
    protected function get($type, $key)
    {
        return (new Client())->get(urlencode($type . ":" . $key));
    }

    /**
     * Set data in the Redis Cache
     *
     * @param     $type
     * @param     $key
     * @param     $value
     * @param int $expire
     * @return bool
     */
    protected function set($type, $key, $value, $expire = 0)
    {
        return (new Client())->set(urlencode($type . ":" . $key), $value, $expire);
    }
}

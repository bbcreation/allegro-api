<?php

namespace bbcreation\AllegroApi\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;

/**
 * Adds token based authentication.
 *
 * @package bbcreation\AllegroApi\HttpClient\Plugin
 */
class TokenAuthentication implements Plugin
{
    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first)
    {
        $request = $request->withHeader('Authorization', sprintf('Bearer %s', $this->token));

        return $next($request);
    }
}

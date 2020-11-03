<?php

namespace bbcreation\AllegroApi\Auth;

use Http\Client\HttpClient;

/**
 * Interface AuthInterface.
 *
 * @package bbcreation\AllegroApi\Auth
 */
interface AuthInterface
{
    /**
     * Fetches the auth tokens based on the current state.
     *
     * @param HttpClient|null $httpClient
     * @return mixed
     */
    public function fetchAuthToken(HttpClient $httpClient = null);
}

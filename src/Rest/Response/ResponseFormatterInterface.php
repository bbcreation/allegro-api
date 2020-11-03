<?php

namespace bbcreation\AllegroApi\Rest\Response;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface ResponseFormatterInterface.
 *
 * @package bbcreation\AllegroApi
 */
interface ResponseFormatterInterface
{
    /**
     * Formats HTTP response to wanted format json/object/xml etc.
     *
     * @param ResponseInterface $response
     * @return mixed
     */
    public function formatResponse(ResponseInterface $response);
}

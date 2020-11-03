<?php

namespace bbcreation\AllegroApi\Rest\Response;

use Psr\Http\Message\ResponseInterface;

/**
 * Class DummyResponseFormatter.
 *
 * @package bbcreation\AllegroApi\Rest
 */
class DummyResponseFormatter implements ResponseFormatterInterface
{
    /**
     * Returns RAW response without any formatting.
     *
     * @param ResponseInterface $response
     * @return mixed
     */
    public function formatResponse(ResponseInterface $response)
    {
        return $response;
    }
}

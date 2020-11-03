<?php

namespace bbcreation\AllegroApi\Rest\Sale;

use bbcreation\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Loyalty.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package bbcreation\AllegroApi\Rest
 */
class Loyalty extends AbstractRestResource
{
    /**
     * @return Loyalty\Promotions
     */
    public function promotions()
    {
        return new Loyalty\Promotions($this->client);
    }
}

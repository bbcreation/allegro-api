<?php

namespace bbcreation\AllegroApi\Rest\Sale\OfferAdditionalServices;

use bbcreation\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Definitions.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-additional-services
 *
 * @package bbcreation\AllegroApi\Rest
 */
class Definitions extends AbstractRestResource
{
    /**
     * Returns additional services definitions by user ID.
     *
     * @param string $userId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all($userId)
    {
        return $this->get('/sale/offer-additional-services/definitions?user.id='.rawurldecode($userId));
    }
}

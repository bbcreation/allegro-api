<?php

namespace bbcreation\AllegroApi\Rest\Sale;

use bbcreation\AllegroApi\Rest\AbstractRestResource;

/**
 * Class OfferAdditionalServices.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-additional-services
 *
 * @package bbcreation\AllegroApi\Rest
 */
class OfferAdditionalServices extends AbstractRestResource
{
    /**
     * @return OfferAdditionalServices\Definitions
     */
    public function definitions()
    {
        return new OfferAdditionalServices\Definitions($this->client);
    }

    /**
     * @return OfferAdditionalServices\Groups
     */
    public function groups()
    {
        return new OfferAdditionalServices\Groups($this->client);
    }
}

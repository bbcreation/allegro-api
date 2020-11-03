<?php

namespace bbcreation\AllegroApi\Rest\Sale;

use Http\Client\Exception;
use bbcreation\AllegroApi\Rest\AbstractRestResource;

/**
 * Class DeliveryMethods.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management/get_sale_delivery_methods
 *
 * @package bbcreation\AllegroApi\Rest
 */
class DeliveryMethods extends AbstractRestResource
{
    /**
     * Get a list of available delivery methods.
     *
     * @return mixed
     * @throws Exception
     */
    public function all()
    {
        return $this->get('/sale/delivery-methods');
    }
}

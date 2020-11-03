<?php

namespace bbcreation\AllegroApi\Rest\Sale\Categories;

use Http\Client\Exception;
use bbcreation\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Parameters.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package bbcreation\AllegroApi\Rest\Sale
 */
class Parameters extends AbstractRestResource
{
    /**
     * Gets parameters by category id.
     *
     * @param string $categoryId
     * @return mixed
     * @throws Exception
     */
    public function all($categoryId)
    {
        return $this->get('/sale/categories/'.rawurldecode($categoryId).'/parameters');
    }
}

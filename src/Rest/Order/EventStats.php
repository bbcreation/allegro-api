<?php

namespace bbcreation\AllegroApi\Rest\Order;

use Http\Client\Exception;
use bbcreation\AllegroApi\Rest\AbstractRestResource;

/**
 * Class EventStats.
 *
 * @link https://developer.allegro.pl/documentation/#operation/getOrderEventsStatisticsUsingGET
 *
 * @package bbcreation\AllegroApi\Rest\Order
 */
class EventStats extends AbstractRestResource
{
    /**
     * Returns object that contains event id and occurrence date of the latest event.
     *
     * @return mixed
     * @throws Exception
     */
    public function show()
    {
        return $this->get('/order/event-stats');
    }
}

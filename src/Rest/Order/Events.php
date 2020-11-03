<?php

namespace bbcreation\AllegroApi\Rest\Order;

use Http\Client\Exception;
use bbcreation\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Events.
 *
 * @link https://developer.allegro.pl/documentation/#operation/getOrderEventsUsingGET
 *
 * @package bbcreation\AllegroApi\Rest\Order
 */
class Events extends AbstractRestResource
{
    /**
     * Returns events of actions like making a purchase, filling in the checkout form (FOD),
     * finishing payment process, making a surcharge.
     *
     * @param string $fromEventId   Event Id
     * @param array $type           BOUGHT, FILLED_IN, READY_FOR_PROCESSING
     * @param int $limit
     * @return mixed
     * @throws Exception
     */
    public function all($fromEventId = '', array $type = [], $limit = 100)
    {
        return $this->get('/order/events?'.http_build_query([
            'from' => $fromEventId,
            'type' => implode(',', $type),
            'limit' => $limit,
        ]));
    }
}

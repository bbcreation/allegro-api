<?php

namespace bbcreation\AllegroApi\Rest;

/**
 * Class Users.
 *
 * @link https://developer.allegro.pl/documentation/#/users
 *
 * @package bbcreation\AllegroApi\Rest
 */
class Users extends AbstractRestResource
{
    /**
     * Get user ratings-summary.
     *
     * @param string $userId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function ratingsSummary($userId)
    {
        return $this->get('/users/'.rawurldecode($userId).'/ratings-summary');
    }
}

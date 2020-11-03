<?php

namespace bbcreation\AllegroApi;

/**
 * Interface CredentialsInterface.
 *
 * @package bbcreation\AllegroApi
 */
interface CredentialsInterface
{
    /**
     * Gets Client Id.
     *
     * @return string
     */
    public function getClientId();

    /**
     * Gets Client secret.
     *
     * @return string
     */
    public function getClientSecret();

    /**
     * Gets redirect URI.
     *
     * @return string
     */
    public function getRedirectUri();

    /**
     * Is Sandbox environment.
     *
     * @return bool
     */
    public function isSandbox();
}

<?php
namespace SonnyBlaine\IntegratorBridge;

/**
 * Interface RequestInterface
 * @package SonnyBlaine\IntegratorBridge
 */
interface RequestInterface
{
    /**
     * Data object to be integrated
     * @return \stdClass
     */
    public function getData(): \stdClass;

    /**
     * Method identifier to be used for integration
     * @return string
     */
    public function getMethodIdentifier(): string;
}
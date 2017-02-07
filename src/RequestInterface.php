<?php
namespace SonnyBlaine\IntegratorBridge;

/**
 * Interface RequestInterface
 * @package SonnyBlaine\IntegratorBridge
 */
interface RequestInterface
{
    /**
     * @return \stdClass
     */
    public function getData(): \stdClass;
}
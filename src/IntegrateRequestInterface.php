<?php

namespace SonnyBlaine\IntegratorBridge;

/**
 * Interface IntegrateRequestInterface
 * @package SonnyBlaine\IntegratorBridge
 */
interface IntegrateRequestInterface extends RequestInterface
{
    /**
     * ID from Request
     * @return int
     */
    public function getId(): int;
}
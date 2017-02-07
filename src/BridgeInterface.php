<?php
namespace SonnyBlaine\IntegratorBridge;

/**
 * Interface BridgeInterface
 * @package SonnyBlaine\IntegratorBridge
 */
interface BridgeInterface
{
    /**
     * @param RequestInterface $request
     * @return mixed
     */
    public function integrate(RequestInterface $request);
}
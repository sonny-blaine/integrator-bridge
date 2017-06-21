<?php
namespace SonnyBlaine\IntegratorBridge;

/**
 * Interface BridgeInterface
 * @package SonnyBlaine\IntegratorBridge
 */
interface BridgeInterface
{
    /**
     * Integrates a determined requisition
     * @param RequestInterface $request
     * @return mixed
     */
    public function integrate(RequestInterface $request);

    /**
     * Retrieves data
     * @param RequestInterface $request
     * @return mixed
     */
    public function search(RequestInterface $request);
}
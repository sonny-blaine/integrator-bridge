<?php
namespace SonnyBlaine\IntegratorBridge;

/**
 * Interface BridgeInterface
 * @package SonnyBlaine\IntegratorBridge
 */
interface BridgeInterface
{
    /**
     * Integrates a determined request
     * @param IntegrateRequestInterface $request
     * @return mixed
     */
    public function integrate(IntegrateRequestInterface $request);

    /**
     * Retrieves data
     * @param SearchRequestInterface $request
     * @return mixed
     */
    public function search(SearchRequestInterface $request);
}
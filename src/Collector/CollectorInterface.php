<?php

namespace Warden\Collector;

/**
 * Collector interface governs how and what information is available
 *
 * @package Warden
 * @subpackage Collectors
 * @author Dan Cox
 */
interface CollectorInterface
{
    /**
     * Registers an action to perform upon starting warden
     *
     * @param \Symfony\Component\EventsDispatcher\EventsDispatcher $eventDispatcher
     * @return void
     */
    public function register($eventDispatcher);

    /**
     * Returns an array describing the data and data types this will collect
     *
     * @return Array
     */
    public function describe();
}

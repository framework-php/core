<?php

namespace GuilhermeHideki\Core\Patterns;

/**
 * Simple factory interface.
 *
 * @package GuilhermeHideki\Core\Patterns
 */
interface IFactory
{
    /**
     * Creates something
     *
     * @param $type
     *
     * @return mixed
     */
    public function make($type);
}
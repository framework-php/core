<?php

namespace GuilhermeHideki\Core\Renderer;

/**
 * Adapter pattern for rendering the views
 *
 * @package GuilhermeHideki\Core\Renderer
 */
interface IRenderer
{
    /**
     * @param string $template
     * @param array  $data
     *
     * @return string
     */
    public function render($template, array $data = []);
}
<?php

namespace GuilhermeHideki\Core\Renderer;

use Twig_Environment;
use Twig_Error_Loader;
use Twig_Error_Runtime;
use Twig_Error_Syntax;

/**
 * Twig adapter for rendering data.
 *
 * @package GuilhermeHideki\Core\Renderer
 */
class TwigRenderer implements IRenderer
{
    /**
     * @var Twig_Environment
     */
    private $renderer;

    /**
     * TwigRenderer constructor.
     *
     * @param Twig_Environment $renderer
     */
    public function __construct(Twig_Environment $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * @param string $template
     * @param array  $data
     *
     * @return string
     *
     * @throws Twig_Error_Syntax
     * @throws Twig_Error_Runtime
     * @throws Twig_Error_Loader
     */
    public function render($template, array $data = [])
    {
        return $this->renderer->render($template, $data);
    }
}
<?php

namespace Fenrizbes\TypographBundle\Twig;

use Fenrizbes\TypographBundle\Service\TypographService;

class TypographTwigExtension extends \Twig_Extension
{
    protected $typograph;

    public function __construct(TypographService $typograph)
    {
        $this->typograph = $typograph;
    }

    public function getName()
    {
        return 'FenrizbesTypograph';
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('typograph', array($this, 'applyTypograph'), array('is_safe' => array('html')))
        );
    }

    public function applyTypograph($string, $config = null)
    {
        return $this->typograph->apply($string, $config);
    }
}
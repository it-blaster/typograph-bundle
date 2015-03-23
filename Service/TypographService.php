<?php

namespace Fenrizbes\TypographBundle\Service;

use Fenrizbes\TypographBundle\EMT\EMTypograph;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

class TypographService
{
    protected $configs;

    public function __construct($configs)
    {
        $this->configs = $configs;
    }

    public function apply($string, $config = null)
    {
        if (is_null($config)) {
            $config = 'default';
        }

        if (!isset($this->configs[$config])) {
            throw new InvalidConfigurationException('Typograph\'s config "'. $config .'" doesn\'t exist');
        }

        return EMTypograph::fast_apply($string, $this->configs[$config]);
    }
}
<?php

namespace Fenrizbes\TypographBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('fenrizbes_typograph');

        $rootNode
            ->children()
                ->arrayNode('configs')
                    ->useAttributeAsKey('name')

                    ->prototype('array')
                        ->useAttributeAsKey('name')
                        ->prototype('variable')->end()
                    ->end()

                    ->defaultValue(array(
                        'default' => array(
                            'Text.paragraphs'           => 'off',
                            'OptAlign.oa_oquote'        => 'off',
                            'OptAlign.oa_obracket_coma' => 'off'
                        )
                    ))
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}

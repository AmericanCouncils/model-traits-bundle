<?php

namespace AC\ModelTraitsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use AC\ModelTraits\AnnotationReaderFetcher;

class ModelTraitsExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        AnnotationReaderFetcher::setReaderFetchFunc(function() use ($container) {
            return $container->get('annotation_reader');
        });
    }

    public function getAlias()
    {
        return "model_traits";
    }
}

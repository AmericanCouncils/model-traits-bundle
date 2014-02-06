<?php

namespace AC\ModelTraitsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AC\ModelTraits\AnnotationReaderFetcher;

class ACModelTraitsBundle extends Bundle
{
    public function boot()
    {
        $container = $this->container;
        if (!($container instanceof ContainerInterface)) {
            throw new \RuntimeException("Invalid container!\n");
        }
        AnnotationReaderFetcher::setReaderFetchFunc(function() use ($container) {
            return $container->get('annotation_reader');
        });
    }
}

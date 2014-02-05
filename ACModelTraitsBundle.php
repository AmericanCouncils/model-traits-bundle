<?php

namespace AC\ModelTraitsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use AC\ModelTraits\AnnotationReaderFetcher;

class ACModelTraitsBundle extends Bundle
{
    public function boot()
    {
        AnnotationReaderFetcher::setReaderFetchFunc(function() use ($container) {
            return $container->get('annotation_reader');
        });
    }
}

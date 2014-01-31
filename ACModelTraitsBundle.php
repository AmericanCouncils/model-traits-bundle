<?php

namespace AC\ModelTraitsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use AC\ModelTraitsBundle\DependencyInjection\ModelTraitsExtension;

class ACModelTraitsBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->registerExtension(new ModelTraitsExtension());
    }
}

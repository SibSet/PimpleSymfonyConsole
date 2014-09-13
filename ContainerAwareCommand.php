<?php

namespace SibSet\Pimple\Console;

use Pimple\Container;
use Symfony\Component\Console\Command\Command;

abstract class ContainerAwareCommand extends Command
{
    /**
     * @var Container
     */
    private $container;

    /**
     * @param string $id
     *
     * @return mixed
     */
    protected function get($id)
    {
        return $this->container[$id];
    }

    /**
     * @param Container   $container
     * @param string|null $name
     */
    public function __construct(Container $container, $name = null)
    {
        parent::__construct($name);

        $this->container = $container;
    }
}

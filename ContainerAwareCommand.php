<?php

namespace SibSet\Pimple\Console;

use Symfony\Component\Console\Command\Command;

abstract class ContainerAwareCommand extends Command
{
    /**
     * @var \Pimple
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
     * @param \Pimple     $container
     * @param string|null $name
     */
    public function __construct(\Pimple $container, $name = null)
    {
        parent::__construct($name);

        $this->container = $container;
    }
}

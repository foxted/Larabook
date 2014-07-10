<?php  namespace Larabook\Core;

use App;

/**
 * Trait CommandBus
 * @package Larabook\Core
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
trait CommandBus 
{

    /**
     * Execute command
     * @param $command
     * @return mixed
     */
    public function execute($command)
    {
        return $this->getCommandBus()->execute($command);
    }

    /**
     * Fetch the command bus
     * @return mixed
     */
    public function getCommandBus()
    {
        return App::make('Laracasts\Commander\CommandBus');
    }
} 
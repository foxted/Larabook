<?php  namespace Larabook\Statuses\Events;

/**
 * Class StatusWasPublished
 * @package Larabook\Statuses\Events
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class StatusWasPublished
{

    public $body;

    public function __construct($body)
    {
        $this->body = $body;
    }

    
} 
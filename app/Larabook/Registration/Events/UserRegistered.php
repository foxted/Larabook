<?php  namespace Larabook\Registration\Events;

use Larabook\Users\User;

/**
 * Class UserRegistered
 * @package Larabook\Registration\Events
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class UserRegistered
{

    public $user;

    public function __construct( User $user )
    {
        $this->user = $user;
    }

}
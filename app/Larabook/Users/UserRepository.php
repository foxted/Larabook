<?php  namespace Larabook\Users;

/**
 * Class UserRepository
 * @package Larabook\Users
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class UserRepository
{

    /**
     * Persist a user
     * @param User $user
     * @return mixed
     */
    public function save(User $user)
    {
        return $user->save();
    }

    
} 
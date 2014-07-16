<?php  namespace Larabook\Statuses;

use Larabook\Users\User;

/**
 * Class StatusRepository
 * @package Larabook\Statuses
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class StatusRepository
{

    /**
     * Get user statuses
     * @param User $user
     * @return mixed
     */
    public function getAllForUser(User $user)
    {
        return User::find($user->id)->statuses;
    }

    /**
     * Save a new status for a user
     * @param Status $status
     * @param        $userId
     */
    public function save(Status $status, $userId)
    {
        return User::findOrFail($userId)
                ->statuses()
                ->save($status);
    }

    
} 
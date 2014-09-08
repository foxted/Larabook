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
        return $user->statuses()->with('user')->latest()->get();
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

    /**
     * Get the feed for a user
     * @param User $user
     * @return mixed
     */
    public function getFeedForUser( User $user )
    {
        $userIds = $user->followedUsers()->lists('followed_id');
        $userIds[] = $user->id;

        return Status::with('comments')->whereIn('user_id', $userIds)->latest()->get();
    }

    /**
     * Leave a comment on a status
     * @param $userId
     * @param $statusId
     * @param $body
     */
    public function leaveComment( $userId, $statusId, $body)
    {
        $comment = Comment::leave($body, $statusId);
        User::findOrFail($userId)->comments()->save($comment);

        return $comment;
    }
} 
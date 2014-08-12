<?php  namespace Larabook\Users;

/**
 * Class FollowUserCommand
 * @package Larabook\Users
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class FollowUserCommand
{

    public $userId;
    public $userIdToFollow;

    /**
     * Constructor
     * @param $userId
     * @param $userIdToFollow
     */
    public function __construct( $userId, $userIdToFollow )
    {
        $this->userId         = $userId;
        $this->userIdToFollow = $userIdToFollow;
    }

} 
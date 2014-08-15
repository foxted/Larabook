<?php namespace Larabook\Users;

/**
 * Class UnfollowUserCommand
 * @package Larabook\Users
 * @author  Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class UnfollowUserCommand {

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userIdToUnfollow;

    /**
     * @param string userId
     * @param string userIdToUnfollow
     */
    public function __construct($userId, $userIdToUnfollow)
    {
        $this->userId = $userId;
        $this->userIdToUnfollow = $userIdToUnfollow;
    }

}
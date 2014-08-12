<?php  namespace Larabook\Users;

use Laracasts\Commander\CommandHandler;

/**
 * Class FollowUserCommandHandler
 * @package Larabook\Users
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class FollowUserCommandHandler implements CommandHandler
{

    protected $userRepo;

    /**
     * Constructor
     * @param UserRepository $userRepo
     */
    public function __construct( UserRepository $userRepo )
    {
        $this->userRepo = $userRepo;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle( $command )
    {
        $user = $this->userRepo->findById($command->userId);

        $this->userRepo->follow($command->userIdToFollow, $user);

        return $user;

    }

}
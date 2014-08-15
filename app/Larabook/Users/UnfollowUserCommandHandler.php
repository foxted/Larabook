<?php namespace Larabook\Users;

use Laracasts\Commander\CommandHandler;

/**
 * Class UnfollowUserCommandHandler
 * @package Larabook\Users
 * @author  Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class UnfollowUserCommandHandler implements CommandHandler {

    /**
     * @var UserRepository
     */
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
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        $user = $this->userRepo->findById($command->userId);
        $this->userRepo->unfollow($command->userIdToUnfollow, $user);
    }

}
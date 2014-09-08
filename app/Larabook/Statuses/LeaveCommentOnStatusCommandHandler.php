<?php namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler;

class LeaveCommentOnStatusCommandHandler implements CommandHandler {

    /**
     * @var StatusRepository
     */
    private $statusRepository;

    /**
     * Constructor
     * @param StatusRepository $statusRepository
     */
    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        $comment = $this->statusRepository->leaveComment($command->user_id, $command->status_id, $command->body);

        return $comment;
    }

}
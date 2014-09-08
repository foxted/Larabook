<?php
use Larabook\Statuses\LeaveCommentOnStatusCommand;
use Laracasts\Commander\CommanderTrait;

/**
 * Class CommentsController
 *
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class CommentsController extends \BaseController {

    use CommanderTrait;

	/**
	 * Leave a new comment
	 * POST /statuses/{id}/comments
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = array_add(Input::get(), 'user_id', Auth::id());

        $this->execute(LeaveCommentOnStatusCommand::class, $input);

        return Redirect::back();
	}

}
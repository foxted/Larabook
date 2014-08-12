<?php

use Larabook\Users\FollowUserCommand;

class FollowsController extends \BaseController {


	/**
	 * Follow user
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = array_add(Input::all(), 'userId', Auth::id());

        $this->execute(FollowUserCommand::class, $input);

        Flash::success('You are now following this user.');

        return Redirect::back();
	}


	/**
	 * Unfollow a user
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

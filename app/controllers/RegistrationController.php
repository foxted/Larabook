<?php

/**
 * Class RegistrationController
 *
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class RegistrationController extends \BaseController
{

	/**
	 * Show a form to register the user
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

    /**
     * Create a new Larabook user
     * @return string
     */
    public function store()
    {
        $user = User::create(
            Input::only('username', 'email', 'password')
        );

        Auth::login($user);

        return Redirect::home();
    }

}

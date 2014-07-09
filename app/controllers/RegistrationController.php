<?php

use Larabook\Forms\RegistrationForm;

/**
 * Class RegistrationController
 *
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class RegistrationController extends \BaseController
{

    /**
     * @var RegistrationForm
     */
    private $registrationForm;

    public function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;
    }

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
        $this->registrationForm->validate(Input::all());
        $user = User::create(
            Input::only('username', 'email', 'password')
        );

        Auth::login($user);

        return Redirect::home();
    }

}

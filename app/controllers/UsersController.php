<?php

use Larabook\Users\UserRepository;

class UsersController extends \BaseController {

    /**
     * @var Larabook\Users\UserRepository
     */
    protected $userRepository;

    /**
     * Constructor
     * @param UserRepository $userRepository
     */
    public function __construct( UserRepository $userRepository )
    {
        $this->userRepository = $userRepository;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->userRepository->getPaginated();

        return View::make('users.index')->withUsers($users);
	}

    /**
     * Show profile of a user
     * @param $username
     */
    public function show($username)
    {
        $user = $this->userRepository->findByUsername($username);

        return View::make('users.show')->withUser($user);
    }

}

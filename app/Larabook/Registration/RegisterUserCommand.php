<?php  namespace Larabook\Registration;

/**
 * Class RegisterUserCommand
 * @package Larabook\Registration
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class RegisterUserCommand
{

    public $username;

    public $email;

    public $password;

    /**
     * Constructor
     * @param $username
     * @param $email
     * @param $password
     */
    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    
} 
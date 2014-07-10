<?php  namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

/**
 * Class RegistrationForm
 * @package Larabook\Forms
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class RegistrationForm extends FormValidator
{

    /**
     * Validation rules for the registration form
     * @var array
     */
    protected $rules = [
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
    ];

    
} 
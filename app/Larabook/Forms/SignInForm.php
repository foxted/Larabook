<?php  namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

/**
 * Class SignInForm
 *
 * @package Larabook\Forms
 * @author  Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class SignInForm extends FormValidator
{

    /**
     * Validation rules for the registration form
     *
     * @var array
     */
    protected $rules = [
        'email'    => 'required',
        'password' => 'required'
    ];

}
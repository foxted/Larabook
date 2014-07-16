<?php  namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

/**
 * Class PublishStatusForm
 * @package Larabook\Forms
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class PublishStatusForm extends FormValidator
{

    /**
     * Validation rules for the publish status form
     *
     * @var array
     */
    protected $rules = [
        'body' => 'required'
    ];

    
} 
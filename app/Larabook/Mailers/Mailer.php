<?php  namespace Larabook\Mailers;

use Illuminate\Mail\Mailer as Mail;

/**
 * Class Mailer
 * @package Larabook\Mailers
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
abstract class Mailer
{

    /**
     * @var \Illuminate\Mail\Mailer
     */
    private $mail;

    /**
     * Constructor
     * @param Mail $mail
     */
    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    /**
     * Send to a user
     * @param $user
     * @param $subject
     * @param $view
     * @param $data
     */
    public function sendTo($user, $subject, $view, $data = [])
    {
        $this->mail->queue($view, $data, function($message) use ($user, $subject)
        {
            $message->to($user->email)->subject($subject);
        });
    }
    
} 
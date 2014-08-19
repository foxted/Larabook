<?php  namespace Larabook\Mailers;

use Larabook\Users\User;

/**
 * Class UserMailer
 * @package Larabook\Mailers
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class UserMailer extends Mailer
{
    /**
     * Send welcome message to a user
     * @param User $user
     */
    public function sendWelcomeMessageTo(User $user)
    {
        $subject = 'Welcome to Larabook!';
        $view = 'emails.registration.confirm';

        return $this->sendTo($user, $subject, $view);
    }
    
} 
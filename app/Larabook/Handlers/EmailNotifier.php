<?php  namespace Larabook\Handlers;

use Larabook\Mailers\UserMailer;
use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventListener;

/**
 * Class EmailNotifier
 * @package Larabook\Handlers
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class EmailNotifier extends EventListener
{

    /**
     * @var \Larabook\Mailers\UserMailer
     */
    private $mailer;

    /**
     * Constructor
     * @param UserMailer $mailer
     */
    public function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * When a user register, send welcome message
     * @param UserRegistered $event
     */
    public function whenUserRegistered(UserRegistered $event)
    {
        $this->mailer->sendWelcomeMessageTo($event->user);
    }

    
} 
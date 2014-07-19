<?php  namespace Larabook\Statuses;

use Laracasts\Presenter\Presenter;

/**
 * Class StatusPresenter
 * @package Larabook\Statuses
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class StatusPresenter extends Presenter
{

    /**
     * Display how long ago a status was published
     * @return mixed
     */
    public function timeSincePublished()
    {
        return $this->created_at->diffForHumans();
    }

    
} 
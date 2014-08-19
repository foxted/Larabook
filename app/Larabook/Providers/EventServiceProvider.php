<?php  namespace Larabook\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class EventServiceProvider
 * @package Larabook\Providers
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class EventServiceProvider extends ServiceProvider
{

    /**
     * Register Larabook event listeners
     *
     * @return void
     */
    public function register()
    {
        $this->app['events']->listen('Larabook.*', 'Larabook\Handlers\EmailNotifier');
    }

}
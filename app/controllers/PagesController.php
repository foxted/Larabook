<?php

/**
 * Class PagesController
 *
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class PagesController extends \BaseController
{

    public function home()
    {
        return View::make('pages.home');
    }

}

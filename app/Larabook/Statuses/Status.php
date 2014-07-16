<?php namespace Larabook\Statuses;

use Larabook\Statuses\Events\StatusWasPublished;
use Laracasts\Commander\Events\EventGenerator;

/**
 * Class Status
 * @package Larabook\Statuses\Status
 * @author Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class Status extends \Eloquent
{
    use EventGenerator;

    /**
     * Fillable fields for a new status
     * @var array
     */
    protected $fillable = [ 'body' ];

    /**
     * A status belongs to a user
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('Larabook\Users\User');
    }

    /**
     * Publish a new status
     * @static
     * @param $body
     * @return static
     */
    static public function publish($body)
    {
        $status = new static(compact('body'));

        $status->raise(new StatusWasPublished($body));

        return $status;
    }
    
}
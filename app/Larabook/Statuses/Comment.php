<?php namespace Larabook\Statuses;

/**
 * Class Comment
 *
 * @package Larabook\Statuses
 * @author  Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class Comment extends \Eloquent {

	protected $fillable = ['user_id', 'status_id', 'body'];

    /**
     * Comment owner
     * @return mixed
     */
    public function owner(){
        return $this->belongsTo('Larabook\Users\User', 'user_id');
    }

    /**
     * Leave a comment
     * @static
     * @param $body
     * @param $statusId
     * @return static
     */
    public static function leave($body, $statusId){
        return new static([
            'body' => $body,
            'status_id' => $statusId
        ]);
    }
}
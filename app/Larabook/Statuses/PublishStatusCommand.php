<?php  namespace Larabook\Statuses;

/**
 * Class PublishStatusCommand
 *
 * @package Larabook\Registration
 * @author  Valentin PRUGNAUD <valentin@whatdafox.com>
 * @url http://www.foxted.com
 */
class PublishStatusCommand
{

    public $body;
    public $userId;

    /**
     * Constructor
     *
     * @param $body
     * @param $userId
     */
    public function __construct( $body, $userId )
    {
        $this->body = $body;
        $this->userId = $userId;
    }

}
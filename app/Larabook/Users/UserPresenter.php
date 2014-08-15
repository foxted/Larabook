<?php namespace Larabook\Users;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter
{
    /**
     * Present a link to the user gravatar
     *
     * @param int $size
     * @return string
     */
    public function gravatar($size = 30)
    {
        $email = md5($this->email);

        return "//gravatar.com/avatar/{$email}?s={$size}";
    }

    /**
     * Followers count for user
     * @return string
     */
    public function followerCount()
    {
        $count = $this->entity->followers()->count();
        $plural = str_plural('follower', $count);

        return "{$count} {$plural}";
    }

    /**
     * Statuses count for user
     * @return string
     */
    public function statusCount()
    {
        $count  = $this->entity->statuses()->count();
        $plural = str_plural('status', $count);

        return "{$count} {$plural}";
    }

}
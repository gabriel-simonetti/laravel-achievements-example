<?php

namespace App\Listeners;

use Gstt\Achievements\Event\Unlocked;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Session;

class AchievementListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Unlocked  $event
     * @return void
     */
    public function handle(Unlocked $event)
    {
        $key = 'achievements';
        $value = "Achievement unlocked: " . $event->progress->details->name;
        Session::flash($key, array_merge((array)Session::get($key), array($value)));
    }
}

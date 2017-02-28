<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class MakeFivePosts extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "Fifth Post";

    /*
     * A small description for the achievement
     */
    public $description = "You have posted five times!";

    public $points = 5;
}

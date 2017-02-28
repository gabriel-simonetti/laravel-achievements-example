<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class MakeTenPosts extends Achievement
{
    /*
     * The achievement name
     */
    public $name = "Ten Posts Already?";

    /*
     * A small description for the achievement
     */
    public $description = "Thank you for making ten posts!";

    public $points = 10;
}

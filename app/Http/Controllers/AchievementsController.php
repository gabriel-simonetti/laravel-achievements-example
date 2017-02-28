<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Simonetti
 * Date: 28/02/2017
 * Time: 16:06
 */

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    public function index(Request $request)
    {
        $user = User::find(1);
        $achievements = $user->achievements;

        return view('achievements.index', compact('achievements'));
    }
}
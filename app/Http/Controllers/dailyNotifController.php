<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\DailyNotif;

class dailyNotifController extends Controller
{
    public function dailyNotif(){
        $user = User::first();

        $dailyNotifData = [
            'body' => 'You received this notification.',
            'contentText' => 'Visit our website',
            'url' => url('/'),
            'thanks' => 'Thank you for using our application'
        ];

        $user->notify(new DailyNotif($dailyNotifData));
    }
}

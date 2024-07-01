<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index() {
        Redis::set('user:1:first_name', 'Mike');
        Redis::set('user:2:first_name', 'Alex');
        Redis::set('user:3:first_name', 'Kate');

        $users = Redis::keys('user:*:first_name');
        foreach ($users as $user) {
            echo Redis::get($user) . '<br>';
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction()
    {
        $users = [
            ['id' => 1, 'title' => 'first post', 'posted_by' => 'ahmed', 'created_at' => '2022-02-19 10:00:00'],
            ['id' => 2, 'title' => 'second post', 'posted_by' => 'mohamed', 'created_at' => '2022-02-15 05:00:00'],
        ];
        return view('test',[
            'users' => $users,
        ]);
    }
}

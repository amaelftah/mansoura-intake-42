<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction()
    {
        $users = [
            ['id' => 1, 'name' => 'ahmed'],
            ['id' => 2, 'name' => 'mohamed'],
        ];
        return view('test',[
            'users' => $users,
            'greeting' => 'Hello this is some var from web.php',
        ]);
    }
}

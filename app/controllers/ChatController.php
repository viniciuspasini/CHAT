<?php

namespace app\controllers;

use core\library\Request;

class ChatController
{
    public function index(Request $request)
    {
        return view('chat', ['title' => 'Chat', 'user'=>$request->post['name'], 'room' => $request->post['room']]);
    }
}
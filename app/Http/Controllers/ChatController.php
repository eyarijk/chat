<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Event;

class ChatController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function chat()
    {
    	return view('chat');
    }

    public function push(request $request)
    {
    	event(new Event($request->pesan));
    }
}

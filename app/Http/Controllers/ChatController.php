<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events\Event;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $user = User::find(Auth::id());
    	event(new Event($request->pesan,$user));
    }
}

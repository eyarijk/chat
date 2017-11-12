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
        $this->chatSession($request);
    	event(new Event($request->pesan,$user));
    }

    public function textsession(){
        return session('textsession');
    }
    public function chatSession(request $request)
    {
        session()->put('textsession',$request->textsession);
    }
}

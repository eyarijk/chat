<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Event implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pesan;
    public $user;

    public function __construct($pesan, $user)
    {
        $this->pesan = $pesan;
        $this->user = $user->name;
        $this->dontBroadcastToCurrentUser();
    }

   
    public function broadcastOn()
    {
        return new PrivateChannel('chat');
    }
}

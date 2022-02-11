<?php

namespace Modules\UserLoginReport\Events;

use Illuminate\Queue\SerializesModels;
use Modules\UserLoginReport\Listeners\ModuleLoginListener;

class ModuleLoginEvent
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}

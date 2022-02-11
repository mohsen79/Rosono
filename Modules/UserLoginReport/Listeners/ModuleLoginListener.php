<?php

namespace Modules\UserLoginReport\Listeners;

use App\Models\User;
use Modules\UserLoginReport\Events\ModuleLoginEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Modules\UserLoginReport\Emails\ModuleLoginMail;

class ModuleLoginListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param ModuleLoginEvent $event
     * @return void
     */
    public function handle(ModuleLoginEvent $event)
    {
        $user = User::where('email', $event->email)->first();
        Mail::to($event->email)->send(new ModuleLoginMail($user->name));
    }
}

<?php

namespace Fluxxer\Larafirebase\Channels;

use Illuminate\Notifications\Notification;

class FirebaseChannel
{
    /**
     * Send the given notification.
     */
    public function send($notifiable, Notification $notification)
    {
        /** @var \Fluxxer\Larafirebase\FirebaseMessage $message */
        $message = $notification->toFirebase($notifiable);
    }
}

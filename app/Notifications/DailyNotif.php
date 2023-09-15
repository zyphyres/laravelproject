<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DailyNotif extends Notification
{
    use Queueable;
    private $dailyNotifData;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($dailyNotifData)
    {
        $this->dailyNotifData = $dailyNotifData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line($this->dailyNotifData['body'])
                    ->action($this->dailyNotifData['contentText'], url('/'),
                    $this->dailyNotifData['url'])
                    ->line($this->dailyNotifData['thanks']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

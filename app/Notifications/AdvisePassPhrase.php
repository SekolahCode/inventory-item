<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class AdvisePassPhrase extends Notification
{
    use Queueable;

    public $passphrase;

    public function __construct(string $passphrase)
    {
        $this->passphrase = $passphrase;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)    {        
        return (new MailMessage)            
            ->line('Here is your login PassPhrase which is valid for the next 15 minutes')            
            ->line($this->passphrase)            
            ->line('Or click the button to access the site (opens in a new window)')            
            ->action('Confirm', URL::temporarySignedRoute('login.magiclink', now()->addMinutes(15), ['user' => $notifiable->id, 'code' => $this->passphrase]))            
            ->line('Thank you for using our application!');    
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
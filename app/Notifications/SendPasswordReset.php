<?php

namespace Pterodactyl\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendPasswordReset extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public string $token)
    {
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via(): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(mixed $notifiable): MailMessage
    {
        return (new MailMessage())
            ->subject('Passwort zurücksetzen')
            ->greeting('Hallo ' . $this->user->name . '!')
            ->line('Du erhältst diese E-Mail, weil wir eine Anfrage zum Zurücksetzen des Passwortes für deinen Account erhalten haben.')
            ->action('Passwort zurücksetzen', url('/auth/password/reset/' . $this->token . '?email=' . urlencode($notifiable->email)))
            ->line('Wenn du diese Anfrage nicht gestellt hast, ignoriere bitte diese E-Mail und klicke nicht auf den Link.');
    }
}

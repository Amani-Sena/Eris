<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Container\Attributes\Config;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;

class RedefinirSenhaNotification extends Notification
{
    use Queueable;
    public $token;
    public $email;
    public $name;

    /**
     * Create a new notification instance.
     */
    public function __construct($token, $email, $name)
    {
        $this->token = $token;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage {

        $url = url('/password/reset/' . $this->token . '?email=' . $this->email);
        $minutes = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');
        return (new MailMessage)
            ->subject('Solicitação de Redefinição de Senha')
            ->greeting('Olá ' . $this->name)
            ->line('Recebemos uma solicitação para redefinir sua senha. Se você iniciou esse pedido, clique no botão abaixo para definir uma nova senha.')
            ->action('Redefinir Senha', $url)
            ->line('O link irá expirar em ' . $minutes . ' minutos')
            ->line('Se você não fez essa solicitação, nenhuma ação é necessária!')
            ->salutation('Atenciosamente, equipe Eris.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

<?php

namespace App\Notifications\Client;

use App\Models\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use PhpParser\Node\Expr\Cast\Object_;

class SendClientCredencialsNotification extends Notification
{
    use Queueable;
    private $client;
    private $username;
    private $password;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Client $client, $username, $password)
    {
        $this->client    =   $client;
        $this->username  =   $username;
        $this->password  =   $password;
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
            ->subject('Email de confirmação de criação  de conta')
            ->greeting('Saudações, ' . $this->client->name)
            ->line('Enviamos este email para informar que a sua conta foi criada com sucesso. A partir deste momento pode usar as credenciais abaixo para acessar')
            ->line('Nome de utilizador: '   . $this->username)
            ->line('Senha de utilizador: '  . $this->password)
            ->line('Após fazer o primeiro login poderá alterar a sua senha, caso pretenda!')
            ->line('Caso tenha alguma dficuldade, por favor entre em contacto com a nossa equipe.')
            ->line('Obrigado por usar os nossos serviços!');
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

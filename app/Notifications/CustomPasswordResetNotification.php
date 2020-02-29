<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Lang;

class CustomPasswordResetNotification extends Notification
{
    use Queueable;

    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
        $count = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');

        return (new MailMessage)
            ->from('arvim.chang@gmail.com', '台南農場 Tainan Farm')
            ->subject('重設密碼通知 Reset Password Notification')
            ->greeting(new HtmlString('您好，<br />Hello,'))
            ->line(new HtmlString('您收到此電子郵件是因為我們收到了您帳戶的密碼重設請求。<br />You are receiving this email because we received a password reset request for your account.'))
            ->action('重設密碼 Reset Password', url('https://www.tnfarm.tw'.route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false)))
            ->line(new HtmlString('此密碼重設鏈接將在 ' . $count . ' 分鐘後失效。<br />This password reset link will expire in ' . $count . ' minutes.'))
            ->line(new HtmlString('如果您不需要重設密碼，則無需採取進一步措施。<br />If you did not request a password reset, no further action is required.'))
            ->salutation(new HtmlString('謹此敬告 Regards,<br />台南農場 Tainan Farm'));
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

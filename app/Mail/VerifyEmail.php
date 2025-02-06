<?php
namespace App\Mail;

use App\Models\SocialUser;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\SocialUser  $user
     * @return void
     */
    public function __construct(SocialUser $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = url('/verify-email/' . $this->user->verification_token);

        return $this->subject('Verifica il tuo account')
                    ->view('emails.verify_email', [
                        'url' => $url,
                        'user' => $this->user
                    ]);
    }
}


<?php

namespace App\Mail\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformUserProfile extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $user;

    protected $fileAttached;

    public function __construct($user, $fileAttached = null)
    {
        $this->user = $user;
        $this->fileAttached = $fileAttached;
    }

    public function build()
    {
        $mail = $this->view('mails.inform-user-profile-mail', [
            'user' => $this->user,
        ]);

        if ($this->fileAttached) {
            $mail->attach($this->fileAttached, [
                'as' => $this->fileAttached->getClientOriginalName(),
            ]);
        }

        return $mail;
    }
}

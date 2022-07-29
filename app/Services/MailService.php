<?php

namespace App\Services;

use App\Mail\Admin\InformUserProfile;
use Illuminate\Support\Facades\Mail;

class MailService
{
    public function sendInformUserProfile($user, $file = null)
    {
        Mail::to($user['email'])->send(new InformUserProfile($user, $file));
    }
}

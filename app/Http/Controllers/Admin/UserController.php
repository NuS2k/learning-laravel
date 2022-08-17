<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SendMailUserProfileRequest;
use App\Http\Requests\Admin\UserRequest;
use App\Services\MailService;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
<<<<<<< Updated upstream
            'users' => User::all(),
=======
            'users' => $this->getSessionUsers(),
>>>>>>> Stashed changes
        ]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        Session::push('users', $request->validated());

        return view('admin.user.index', [
            'users' => $this->getSessionUsers(),

        ]);
    }

    public function getMailForm()
    {
        return view('admin.user.form-send-mail', [
            'users' => $this->getSessionUsers(),
        ]);
    }

    private function getSessionUsers()
    {
        return collect(Session::get('users'));
    }

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function sendMail(SendMailUserProfileRequest $request)
    {
        $fileAttached = null;

        if ($request->file('attachment')) {
            $fileAttached = $request->file('attachment');
        }

        $users = $this->getSessionUsers();

        $targetMail = $request->validated()['mail'];
        if (! strcmp($targetMail, 'all')) {
            $users->each(function ($user) {
                $this->mailService->sendInformUserProfile($user, $fileAttached);
            });

            return redirect()->back();
        }

        $user = $users->firstWhere('email', $targetMail);
        $this->mailService->sendInformUserProfile($user, $fileAttached);

        return redirect()->back();
    }
}

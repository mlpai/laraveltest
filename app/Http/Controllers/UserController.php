<?php

namespace App\Http\Controllers;

use App\Mail\UserWelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $users = User::all();

        foreach ($users as $user){
            // Send Email to user
            Mail::to($user)->send(new UserWelcomeEmail()); //Send email without queue
        }

        return "Email sent to users";

    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\EmailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function home_store(Request $request): RedirectResponse
    {   

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'max:50'],
            'message' => ['required', 'max:10000'],
        ]);

        $email = 'contact@suwdengroup.se';
        Mail::to($email)->send(new EmailContact($validatedData));

        return redirect()->back()->with('success', 'Merci de nous avoir contactés ! Nous avons bien reçu votre message, un retour vous sera fait.');
    }
}

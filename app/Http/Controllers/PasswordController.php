<?php

namespace App\Http\Controllers;

use App\Models\PasswordModel;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    //
    use SendsPasswordResetEmails;

    public function sendResetLinkEmail(Request $request)
    {
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        // Personalização do retorno
        if ($response == Password::RESET_LINK_SENT) {
            return back()->with('status', 'Um link para redefinir sua senha foi enviado para o seu endereço de e-mail.');
        } else {
            return back()->withErrors(['email' => 'Não encontramos um usuário com esse endereço de e-mail.']);
        }
    }
}

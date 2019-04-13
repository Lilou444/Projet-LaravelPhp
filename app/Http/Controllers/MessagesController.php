<?php

namespace App\Http\Controllers;

use App\Message;

class MessagesController extends Controller
{
    public function nouveau()
    {
        // Vérification que la personne est bien connectée
        if (auth()->guest()) {
            flash("Vous devez être connecté pour voir cette page.")->error();

            return redirect('/');
        }

        // Validation des données
        request()->validate([
            'message' => ['required'],
        ]);

        // Création d'un message dans la base de données avec Eloquent
        Message::create([
            'utilisateur_id' => auth()->id(),
            'contenu' => request('message'),
        ]);

        // Redirection vers la page de profil avec un message flash.
        flash("Votre message a bien été publié.")->success();
        return back();
    }
}
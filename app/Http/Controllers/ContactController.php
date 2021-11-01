<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ControlRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Redirect;
use App\Models\Message;

class ContactController extends Controller
{
    public function create(){
    	return view('contact.create');
    }
    public function store(ControlRequest $request){
    	//Cette req est equi à la sauv en bdd 
    	$message = Message::create($request->only('nom', 'mail', 'message'));
    	//Puis on passe la variable message au gestionnaire de l'email
    	$maillable = new ContactMessageCreated($message);
    	Mail::to('gueyemoda98@gmail.com')->send($maillable);
    	flashy('Gnangui lay diadiefeul si and bi ak gnoune');
    	return Redirect::route('root_path');

    }
}

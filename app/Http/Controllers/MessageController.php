<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller {
	public function store() {
		$message = request()->validate([
			'name' => 'required',
			'email' => 'required|email',
			'subject' => 'required',
			'content' => 'required|min:3',
		], [
			// 'name.required' => __('I need your name'),
		]);

		// Email

		Mail::to('mllerenav@uni.pe')->queue(new MessageReceived($message));

		//return new MessageReceived($message);

		return back()->with('status', 'Mensaje recibido, la respuesta será enviada en menos de 24h.');
		//return "Datos validados";
	}
}

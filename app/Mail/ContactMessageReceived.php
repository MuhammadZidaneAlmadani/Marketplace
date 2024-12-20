<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;

class ContactMessageReceived extends Mailable
{
    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function build()
    {
        return $this->subject('Pesan Baru dari Hubungi Kami')
                    ->view('emails.contact')
                    ->with([
                        'first_name' => $this->request->first_name,
                        'last_name' => $this->request->last_name,
                        'email' => $this->request->email,
                        'phone' => $this->request->phone,
                        'country' => $this->request->country,
                        'message' => $this->request->message,
                    ]);
    }
}

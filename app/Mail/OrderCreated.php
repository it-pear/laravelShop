<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct()
    {
        // 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($request);
       // return $this->view('mail.orderCreated');
       return $this->from('yurecblinovgelarm@gmail.com')->view('mail.orderCreated');
    }
}

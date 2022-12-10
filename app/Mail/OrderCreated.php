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

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // return $this->view('mail.orderCreated');
       return $this->from('zamkoved@bk.ru')->view('mail.orderCreated', ['data' => $this->data]);
    }
}

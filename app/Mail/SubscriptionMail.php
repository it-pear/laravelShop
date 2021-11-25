<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionMail extends Mailable
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
    return $this->from('yurecblinovgelarm@gmail.com')->view('mail.subscriptionCreated', ['data' => $this->data]);
  }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ElectrineteFactura extends Mailable
{
    use Queueable, SerializesModels;

    public $subjet= 'Pago por el servicio de Electrinete';
    public $vehiculo;
    public $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($vehiculo,$usuario)
    {
      
        $this->vehiculo=$vehiculo;
        $this->usuario=$usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Email.email');
    }
}

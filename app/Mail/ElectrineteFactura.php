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
    public $alquiler;
    public $precio;
    public $now;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($vehiculo,$usuario,$alquiler,$precio,$now)
    {
      
        $this->vehiculo=$vehiculo;
        $this->usuario=$usuario;
        $this->alquiler=$alquiler;
        $this->precio=$precio;
        $this->now=$now;

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

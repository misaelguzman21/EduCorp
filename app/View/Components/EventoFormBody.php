<?php

namespace App\View\Components;

use App\Models\Evento;
use Illuminate\View\Component;

class EventoFormBody extends Component
{
    private $evento;
    /**
     * Create a new component instance.
     * @param \App\Models\Evento $evento
     * @return void
     */
    public function __construct( $evento = null)
    {   if( is_null( $evento ) )
        {
            $evento = Evento::make([]);
        }


        $this->evento = $evento;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [

            'evento' => $this->evento,
        ];
        return view('components.evento-form-body', $params);
    }
}
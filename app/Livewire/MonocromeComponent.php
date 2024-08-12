<?php

namespace App\Livewire;

use Livewire\Component;

class MonocromeComponent extends Component
{
    public $view;

    public function mount(?string $view = null)
    {   
        if (is_null($view)){
           return $this->view = 'index';
        }

        $isView = collect([
            'gallery',
            'salam',
            'acara',
            'couple',
            'quote',
            'gift',
            'thanks',
        ])->contains($view);

        if (!($isView)){
            return abort(404);
        }

        $this->view = $view;
    }

    public function render()
    {
        return view('livewire.monocrome.' . $this->view)
                    ->layout('livewire.monocrome.layout'); 
    }
}

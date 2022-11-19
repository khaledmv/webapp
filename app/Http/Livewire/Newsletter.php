<?php

namespace App\Http\Livewire;

use App\Models\Newsletter as ModelsNewsletter;
use Livewire\Component;

class Newsletter extends Component
{

    public $email;

    protected $rules = [
       
        'email' => 'required|email',
        
    ];

   

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function submit()
    {
        $validatedData = $this->validate();
        ModelsNewsletter::create($validatedData);
        $this->dispatchBrowserEvent('success', ['message' => "Thanks for Subsription"]);
      
        $this->email = '';
       
    }

    public function render()
    {
        return view('livewire.newsletter');
    }



}

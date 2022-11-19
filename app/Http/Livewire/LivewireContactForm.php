<?php

namespace App\Http\Livewire;

use App\Events\ContactMailEvent;
use Livewire\Component;
use App\Models\ContactForm;

class LivewireContactForm extends Component
{
    public $name;
    public $email;
    // public $website;
    public $message; 

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function submit()
    {
        $validatedData = $this->validate();
        
        $name = $this->name;
        $email = $this->email;
        $message = $this->message;
        

         
        ContactForm::create($validatedData);
        $this->dispatchBrowserEvent('success', ['message' => "Thank You! We will touch you very soon"]);


        event(new ContactMailEvent($name, $email, $message));

        $this->name = '';
        $this->email = '';
        $this->message = '';

    }
     
    public function render()
    {
        return view('livewire.livewire-contact-form');
    }
}

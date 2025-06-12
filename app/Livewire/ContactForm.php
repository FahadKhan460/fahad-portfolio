<?php

namespace App\Livewire;

//use App\Mail\ContactMail;
use App\Models\ContactUs;
//use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $message = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        $data = ContactUs::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

//        Mail::send(new ContactMail($data->toArray()));

        Http::post('https://formspree.io/f/mzzgrvlw', [
            'email' => $this->email,
            'message' => "From: {$this->name}\nSubject: {$this->subject}\n\n{$this->message}",
        ]);

        session()->flash('success', 'Message sent successfully!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}


<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use App\Mail\ContactEmail;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Mail;

class MessageForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $content;

    public $validatedMessage;

    protected $rules = [
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'sometimes|nullable|numeric',
        'content' => 'required|max:512',
    ];

    public function submit()
    {
        $validatedMessage = $this->validate();

        Message::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'content' => $this->content,
        ]);

        $this->sendEmail($validatedMessage);


        return redirect()->to('/message');



        $this->success = 'Thank you for reaching out to us!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->phone = '';
        $this->email = '';
        $this->content = '';
    }

    private function sendEmail($validatedMessage)
    {

        /**
         * Store a receiver email address to a variable.
         */
        //$reveiverEmailAddress = "wauters1978@gmail.com";
        $reveiverEmailAddress = "hopeforstraydogsalbania@yahoo.com";



        /**
         * Import the Mail class at the top of this page,
         * and call the to() method for passing the
         * receiver email address.
         *
         * Also, call the send() method to incloude the
         * HelloEmail class that contains the email template.
         */
        Mail::to($reveiverEmailAddress)->send(new ContactEmail($validatedMessage));

        /**
         * Check if the email has been sent successfully, or not.
         * Return the appropriate message.
         */
        if (Mail::flushMacros() != 0) {
            return "Email has been sent successfully.";
        }
        return "Oops! There was some error sending the email.";
    }


    public function render()
    {
        return view('livewire.message-form')->layout('layouts.front.main');
    }
}

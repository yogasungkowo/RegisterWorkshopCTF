<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $nim;
    public $jurusan;
    public $semester;
    public $nohp;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->nim = $data['nim'];
        $this->jurusan = $data['jurusan'];
        $this->semester = $data['semester'];
        $this->nohp = $data['nohp'];
    }

    public function build()
    {
        return $this->view('emails.confirmation')
                    ->subject('Registration Confirmation');
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function showForm()
    {
        $registered = false;
        return view('index', compact('registered'));
    }

    public function submitForm(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'nim' => 'required|string|max:20',
            'jurusan' => 'required|string|max:255',
            'semester' => 'required|integer|max:8',
            'nohp' => 'required',
            'agree'=> 'accepted'
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'nim.required' => 'NIM harus diisi.',
            'jurusan.required' => 'Jurusan harus diisi.',
            'semester.required' => 'Semester harus diisi.',
            'semester.integer' => 'Semester harus berupa angka.',
            'semester.max' => 'Semester maksimal adalah 8.',
            'nohp.required' => 'Nomor HP harus diisi.',
            'agree.accepted' => 'Anda harus menyetujui persyaratan yang ada.'
        ]);

        
        // Url Web App Google Spreadsheet
        $url = 'https://script.google.com/macros/s/AKfycbwEziUmstK5Eod6goMltoxNee0npo9DYSBPz7xNxE7Vu-S90RSbs9br6bdKW_VIbH2A/exec';
        $response = Http::asForm()->post($url, $validateData);
        
        Mail::to($validateData['email'])->send(new RegistrationConfirmation($validateData));

        $registered = true;
        
        return view('index', compact('registered'));
    }
}

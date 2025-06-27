<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function services() {
        return view('services');
    }

    public function contact() {
        return view('contact');
    }

    public function submitContact(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // Aqui você poderia enviar e-mail ou salvar no banco
        return redirect()->route('thankyou');
    }

    public function thankyou() {
        return view('thankyou');
    }
}

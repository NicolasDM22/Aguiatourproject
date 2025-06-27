@extends('layouts.app')

@section('content')
    <h1>Contato</h1>
    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <label>Nome:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Mensagem:</label>
        <textarea name="message" required></textarea>
        <button type="submit">Enviar</button>
    </form>
@endsection

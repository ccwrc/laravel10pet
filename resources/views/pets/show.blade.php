@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pet ID: {{ $pet->id }}</h1>
        <p>Nazwa: {{ $pet->name }}</p>
        <p>Status: {{ $pet->status }}</p>

        <a href="{{ route('pets.index') }}">Powrót</a>
        <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-warning">Edytuj</a>

        <!-- Formularz pozwalający na usunięcie obiektu -->
        <form action="{{ route('pets.destroy', $pet->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć tą krówkę?')">
                Usuń zwierzaka
            </button>
        </form>

    </div>
@endsection

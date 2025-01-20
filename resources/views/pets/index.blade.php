@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dodaj nowego zwierzaka</h1>
        <a href="{{ route('pets.create') }}" class="btn btn-primary">Dodaj nowego zwierzaka</a>
        <!-- Możesz tu dodać opcję wyświetlenia listy zwierząt, o ile PetStore API to obsługuje -->
    </div>
@endsection

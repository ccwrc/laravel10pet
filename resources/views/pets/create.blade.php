@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Formularz - Dodaj nowego zwierzaka</h1>

        <form action="{{ route('pets.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nazwa zwierzaka:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="status">Status:</label>
                <select name="status" id="status" required>
                    <option value="available">Available</option>
                    <option value="pending">Pending</option>
                    <option value="sold">Sold</option>
                </select>
            </div>
            <button type="submit">Dodaj</button>
        </form>
    </div>
@endsection

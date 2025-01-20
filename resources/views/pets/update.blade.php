@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edytuj informacje o zwierzaku</h1>

        <!-- Formularz do aktualizacji obiektu Pet -->
        <form action="{{ route('pets.update', $pet->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nazwa</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    value="{{ $pet->name }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="available" {{ $pet->status === 'available' ? 'selected' : '' }}>Available</option>
                    <option value="pending" {{ $pet->status === 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="sold" {{ $pet->status === 'sold' ? 'selected' : '' }}>Sold</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
        </form>

        <a href="{{ route('pets.show', $pet->id) }}" class="btn btn-secondary mt-3">Anuluj</a>
    </div>
@endsection

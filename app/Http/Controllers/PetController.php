<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PetController extends Controller
{
    protected string $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('PETSTORE_API_URL');
    }

    public function index()
    {
        return view('pets.index');
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        $response = Http::post($this->apiUrl . '/pet', $request->all());

        if ($response->failed()) {
            return back()->withErrors('Błąd podczas tworzenia obiektu.');
        }

        $petData = $response->json();
        $pet = new Pet($petData);

        return redirect()->route('pets.show', $pet->id)->with('success', 'Obiekt pet został utworzony.');
    }

    public function show($id)
    {
        $response = Http::get("{$this->apiUrl}/pet/{$id}");

        if ($response->failed()) {
            return back()->withErrors('Nie udało się pobrać obiektu.');
        }

        $petData = $response->json();
        $pet = new Pet($petData);

        return view('pets.show', compact('pet'));
    }

    public function update(Request $request, $id)
    {
        $payload = [
            'id' => $id,
            'name' => $request->input('name'),
            'status' => $request->input('status'),
            //todo  'photoUrls', 'tags', etc
        ];

        $response = Http::put("{$this->apiUrl}/pet", $payload);

        if ($response->failed()) {
            return back()->withErrors('Błąd aktualizacji obiektu.')->withInput();
        }

        $petData = $response->json();
        $pet = new Pet($petData);

        return redirect()->route('pets.show', $pet->id)->with('success', 'Obiekt został zaktualizowany.');
    }

    public function edit($id)
    {
        $response = Http::get("{$this->apiUrl}/pet/{$id}");

        if ($response->failed()) {
            return back()->withErrors('Nie udało się pobrać obiektu.');
        }

        $petData = $response->json();
        $pet = new Pet($petData);

        return view('pets.update', compact('pet'));
    }

    public function destroy($id)
    {
        $response = Http::delete("{$this->apiUrl}/pet/{$id}");

        if ($response->failed()) {
            return back()->withErrors('Nie udało się usunąć obiektu.');
        }

        return redirect()->route('pets.index')->with('success', 'Obiekt został usunięty.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Character;
class CharacterController extends Controller
{
    public function index()
    {
        try {
            // Consumir la API de Rick and Morty
            $response = Http::get('https://rickandmortyapi.com/api/character');
    
            // Verificar si la respuesta fue exitosa
            if ($response->successful()) {
                $characters = $response->json()['results'];
                return view('characters.index', compact('characters'));
            } else {
                // Manejar errores de la API
                return redirect()->route('home')->with('error', 'No se pudo obtener la información de los personajes.');
            }
        } catch (\Exception $e) {
            // Manejar excepciones generales (por ejemplo, problemas de red)
            return redirect()->route('home')->with('error', 'Ocurrió un error al intentar conectarse a la API.');
        }
    }

    public function show($id)
    {
        try {
            $character = Character::findOrFail($id);
            return view('characters.show', compact('character'));
        } catch (ModelNotFoundException $e) {
            // Manejar el caso en que el personaje no existe
            return redirect()->route('characters.index')->with('error', 'El personaje no fue encontrado.');
        } catch (\Exception $e) {
            // Manejar otras excepciones
            return redirect()->route('characters.index')->with('error', 'Ocurrió un error al mostrar el personaje.');
        }
    }
    public function store()
    {
        try {
            $response = Http::get('https://rickandmortyapi.com/api/character');
    
            if ($response->successful()) {
                $characters = $response->json()['results'];
    
                foreach ($characters as $characterData) {
                    Character::create([
                        'external_id' => $characterData['id'],
                        'name' => $characterData['name'],
                        'status' => $characterData['status'],
                        'species' => $characterData['species'],
                        'type' => $characterData['type'],
                        'gender' => $characterData['gender'],
                        'origin_name' => $characterData['origin']['name'],
                        'origin_url' => $characterData['origin']['url'],
                        'image' => $characterData['image'],
                    ]);
                }
    
                return redirect()->route('characters.index')->with('success', 'Personajes guardados exitosamente.');
            } else {
                return redirect()->route('characters.index')->with('error', 'No se pudo obtener la información de los personajes.');
            }
        } catch (\Exception $e) {
            // Manejar excepciones generales
            return redirect()->route('characters.index')->with('error', 'Ocurrió un error al guardar los personajes.');
        }
    }

    public function edit($id)
    {
        try {
            $character = Character::findOrFail($id);
            return view('characters.edit', compact('character'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('characters.index')->with('error', 'El personaje no fue encontrado.');
        } catch (\Exception $e) {
            return redirect()->route('characters.index')->with('error', 'Ocurrió un error al editar el personaje.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $character = Character::findOrFail($id);
            $character->update($request->all());
    
            return redirect()->route('characters.index')->with('success', 'Personaje actualizado exitosamente.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('characters.index')->with('error', 'El personaje no fue encontrado.');
        } catch (\Exception $e) {
            return redirect()->route('characters.index')->with('error', 'Ocurrió un error al actualizar el personaje.');
        }
    }
}

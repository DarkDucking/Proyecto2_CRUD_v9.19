<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$pokemons = Pokemon::all();
        $user = Auth::user();
        $pokemons = $user->pokemons;
        return view('pokemon.pokemon_index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pokemon.pokemon_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => ['required', 'max:16'],
            'tipo1' => 'required',
            'tipo2' => 'required',
            'grupo_huevo' => ['required', 'max:22'],
            'numero' => ['required','integer'],
            'img' => ['required', 'url'],
        ]);

        $request->merge(['user_id' => Auth::id()]);
        Pokemon::create($request->all());

        return redirect('/pokemon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        //
        return view('pokemon.pokemon_show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        return view('pokemon.pokemon_edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        $request->validate([
            'nombre' => ['required', 'max:16'],
            'tipo1' => 'required',
            'tipo2' => 'required',
            'grupo_huevo' => ['required', 'max:22'],
            'numero' => ['required','integer'],
            'img' => ['required', 'url'],
        ]);

        $pokemon->nombre = $request->nombre;
        $pokemon->tipo1 = $request->tipo1;
        $pokemon->tipo2 = $request->tipo2;
        $pokemon->grupo_huevo = $request->grupo_huevo;
        $pokemon->numero = $request->numero;
        $pokemon->img = $request->img;
        $pokemon->save();
        return redirect('/pokemon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->destroy($pokemon->id);
        return redirect('/pokemon');
    }
}

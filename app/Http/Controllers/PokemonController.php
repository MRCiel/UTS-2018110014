<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PokemonController extends Controller
{
    public function select()
    {
        $result = DB::select("SELECT * FROM pokemons");
        return view('layout.home', ['pokemons' => $result]);
    }
    public function orderbyZA()
    {
        $result = DB::table('pokemons')->orderBy('name', 'DESC')->get();
        return view('sort.orderbyZA', ['pokemons' => $result]);
    }
    public function orderbyAZ()
    {
        $result = DB::table('pokemons')->orderBy('name', 'ASC')->get();
        return view('sort.orderbyAZ', ['pokemons' => $result]);
    }

    public function orderbyASC()
    {
        $result = DB::table('pokemons')->orderBy('id', 'ASC')->get();
        return view('sort.orderbyLowest', ['pokemons' => $result]);
    }

    public function orderbyDESC()
    {
        $result = DB::table('pokemons')->orderBy('id', 'DESC')->get();
        return view('sort.orderbyHighest', ['pokemons' => $result]);
    }
    public function orderbyRAND()
    {
        $result = DB::table('pokemons')->inRandomOrder()->get();
        return view('sort.orderbyRAND', ['pokemons' => $result]);
    }

    public function detail($id = "")
    {
        $result = DB::select("SELECT * FROM pokemons WHERE id = '$id' ");
        return view('layout.detail', ['pokemons' => $result]);
    }
}

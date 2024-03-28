<?php

namespace App\Http\Controllers;

use App\Models\Toperadores;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ToperadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $operadores['operadores'] = Toperadores::paginate(5);
        return view('usuario/index', $operadores);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $roles = Role::all();
        return view('usuario/create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $datosUsuario = request()->except('_token');
        toperadores::insert($datosUsuario);
        return redirect('user/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(toperadores $toperadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(toperadores $toperadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, toperadores $toperadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(toperadores $toperadores)
    {
        //
    }
}

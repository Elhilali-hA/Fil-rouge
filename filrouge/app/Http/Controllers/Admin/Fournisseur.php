<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Models\Fournisseur as ModelFournisseur;
use Illuminate\Http\Request;


class fournisseur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       return view('admin.fournisseurs.home')->with('fournisseurs', ModelFournisseur::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fournisseurs.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nom' => 'required',
            'ville' => 'required',
            
        ]);
        // dd($request->all());

        $four = new ModelFournisseur;
            
         $four->nom = $request->nom;
         $four->id  = $request->id;
         $four->ville = $request->ville;
            
        
        $four->save();
        
        return redirect()->route('fournisseur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $four = ModelFournisseur::find($id);

        return view('admin.fournisseurs.edit')->with('fournisseurs', $four);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $this->validate($request, [
        //     'id' => 'required',
        //     'nom' =>  'required',
        //     'ville' => 'required'
        // ]);
        
        $four = ModelFournisseur::find($id);

        $four->id = $request->id;
        $four->nom = $request->nom;
        $four->ville = $request->ville;

        $four->save();

        return redirect()->route('fournisseur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $four = ModelFournisseur::find($id);
        $four->delete();
        return redirect()->route('fournisseur');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function homePage() 
    {
        return view('produit.create');
    }

    public function addProduit(Request $request)
    {
        $request->validate([
            'title'=>'required|min:4',
            'description'=>'required',
            'date_start'=>'required',
            'date_end'=>'required', 
            'price'=>'required'
        ]);

        $produit = new  Produit();

        $produit->title = $request->title;

        $produit->description = $request->description;

        $produit->date_start = $request->date_start;

        $produit->date_end = $request->date_end;

        $produit->price = $request->price;

        $produit->save();
        flashy()->success("L'evenement a été creer avec succés");

        return redirect()->route('route-all-liste');

    }

    public function allProduit(){
        $produit = Produit::all();

        return view('produit.liste' , compact('produit'));
    }

    public function editProduit($id)
    {
        $produit = Produit::find($id);

        return view('produit.edit' , compact('produit'));

    }

    public function updateProduit(Request $request , $id){

        $produit = Produit::find($id);


        $produit->title = $request->title;

        $produit->description = $request->description;

        $produit->date_start = $request->date_start;

        $produit->date_end = $request->date_end;

        $produit->price = $request->price;

        $produit->save();
        flashy()->success("L'evenement a été modifié avec succès");


        return redirect()->route('route-all-liste');
        
    }

    public function deleteProduit($id){
        Produit::destroy($id);
        flashy()->success("L'evenement a été supprimé avec succès");
        return redirect()->route('route-all-liste');
    }
}

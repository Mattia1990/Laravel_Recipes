<?php

namespace App\Http\Controllers;

use Auth;

use App\User;

use App\Recipe;

use App\Ingredient;

use App\Recipe_Ingredient;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecipesController extends Controller
{
    public function index(){
        
        $recipes = Recipe::all();
        
        return view('home', compact('recipes'));
    }
    
    public function show($id){
        
        $recipe = Recipe::find($id);
        
        return view('show', compact('recipe'));
    }
    
    public function create(){
        
        return view('create');
        
    }
    
    public function save(Request $request){
        
        $this->validate($request, [
            'sendName' => 'required',
            'sendIngr' => 'required',
            'sendDesc' => 'required',
            ]);
        
        $user_id = Auth::user()->id;
        $recipe = Recipe::create(['name' => $request->sendName, 'description' => $request->sendDesc, 'user_id' => $user_id]);
        
        foreach($request->sendIngr as $ingredient){
            
            $ingr = Ingredient::where('name', '=', $ingredient)->first();
            
            if($ingr == null){
                $ingr = Ingredient::create(['name' => $ingredient]);
            }
            
            $thirdtab = Recipe_Ingredient::create(['recipe_id' => $recipe->id, 'ingredient_id' => $ingr->id]);
        }
        
    }
    
    public function delete($id){
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect('/');
    }
    
    public function edit($id){
        
        $recipe = Recipe::find($id);
        
        return view('edit', compact('recipe'));
        
    }
    
    public function update(Request $request, $id){
        
        $recipe = Recipe::find($id);
        
        $input = $request->all();
        
        $recipe->update($input);
        
        return redirect('/');
    }
}

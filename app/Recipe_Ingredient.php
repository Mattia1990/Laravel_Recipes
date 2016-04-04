<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe_Ingredient extends Model
{
    protected $table = "recipes_ingredients";
    
    protected $fillable = [
        'ingredient_id',
        'recipe_id'
    ];
}

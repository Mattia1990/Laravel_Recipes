<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];
    
    public function users(){
        return $this->belongsTo('App\User','user_id');
    }
    
    public function ingredients(){
        return $this->belongsToMany('App\Ingredient', 'recipes_ingredients')->withTimestamps();
    }
}

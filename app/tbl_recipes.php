<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class tbl_recipes extends Model {

    protected $table = 'tbl_recipes';
    protected $primaryKey = 'id';
    protected $fillable = ['id'];

    public function ingredients() {
        return $this->hasMany('App\tbl_recipe_ingredients', 'recipe_id', 'id');
    }

    public function instructions() {
        return $this->hasMany('App\tbl_recipe_instructions', 'recipe_id', 'id');
    }

    public function category() {
        return $this->hasOne('App\tbl_recipe_categories', 'id', 'category_id');
    }

    public function cuisine() {
        return $this->hasOne('App\tbl_cuisines', 'id', 'cuisine_id');
    }

    public function cooking_method() {
        return $this->hasOne('App\tbl_recipe_cooking_methods', 'id', 'cooking_method_id');
    }

    public function time() {
        return $this->hasOne('App\tbl_prepare_time', 'id', 'preparation_time');
    }

    public function tags() {
        return $this->hasMany('App\tbl_tags', 'recipe_id', 'id');
    }

    public function like() {
        return $this->hasOne('App\tbl_recipe_likes', 'recipe_id', 'id')->where('tbl_recipe_likes.user_id', '=', Auth::user()->id);
    }

    public function like_count() {
        return $this->hasMany('App\tbl_recipe_likes', 'recipe_id', 'id')->where('tbl_recipe_likes.like', '=', 1);
    }

    public function likes() {
        return $this->hasMany('App\tbl_recipe_likes', 'recipe_id', 'id');
    }

    public function comments() {
        return $this->hasMany('App\tbl_recipe_comments', 'recipe_id', 'id')->orderBy('created_at', 'asc');
    }

    public function user() {
        return $this->hasOne('App\User', 'id', 'added_by');
    }

    public function myRecipes($flag) {
        if($flag==1){
            return tbl_recipes::where('added_by', '=', Auth::user()->id)->count();
        }
        else{
            return tbl_recipes::where('added_by', '=', Auth::user()->id)->get();
        }
        
    }
}

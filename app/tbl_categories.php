<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_categories extends Model {

    protected $table = 'tbl_categories';
    protected $primaryKey = 'id';
    protected $fillable = ['category_id'];

    public function recipes() {
        return $this->belongsTo('App\tbl_product', 'category_id', 'id');
    }

}

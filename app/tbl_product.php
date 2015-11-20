<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_product extends Model {

    protected $table = 'tbl_product';
    protected $primaryKey = 'id';
    protected $fillable = ['id'];

    public function image() {
        $url = url('img/' . $this->image);
        if (file_exists($url) && $this->image != "") {
            $url = url('img/default.png');
        }

        if (empty($this->image)) {
            $url = url('img/default.png');
        }
        return $url;
    }
    
    public function categoryname() {
        return $this->hasOne('App\tbl_categories', 'id', 'category');
    }

}

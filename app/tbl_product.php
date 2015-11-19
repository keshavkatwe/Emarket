<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_product extends Model {

    protected $table = 'tbl_product';
    protected $primaryKey = 'id';
   
    public function image() {
        $url = url('img/' . $this->image);
        if ($this->image == "") {
            $url = url('img/default.png');
        }
        return $url;
    }

}

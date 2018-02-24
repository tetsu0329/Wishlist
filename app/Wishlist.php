<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{

    protected $table = "tbl_wishlist";

    public $primaryKey = "wishlist_id";

    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
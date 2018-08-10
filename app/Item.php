<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $primaryKey = 'item_id';
    public $timestamps = false;
    public $fillable = [
        'item_name','description',
    ];
    public function category()
    {
       return $this->belongsTo('App\Category', 'category_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $primaryKey = 'category_id';
    public $timestamps = false;
    public $fillable = [
        'category_name', 'description'
    ];
    public function items()
    {
       return $this->hasMany('app\Item', 'category_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo( SubType::class, 'sub_type_id', 'id');
    }

    public function user(){
        return $this->belongsTo( UserItem::class, 'id', 'item_id');
    }
}

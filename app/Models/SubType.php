<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubType extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function item(){
        return $this->hasMany( Item::class, 'sub_type_id', 'id');
    }

    public function type(){
        return $this->belongsTo( Type::class, 'type_id', 'id');
    }
}

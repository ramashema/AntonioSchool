<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function guardian(){
        # TODO: handle student guardian relation
        return $this->belongsTo(Guardian::class);
    }

    public function darasa(){
        # TODO: handle student class relation
        return $this->belongsTo(Darasa::class);
    }
}

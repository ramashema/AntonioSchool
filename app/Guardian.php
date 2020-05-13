<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function students(){
        # TODO: handle relationship between guardian and students
        return $this->hasMany(Student::class);
    }
}

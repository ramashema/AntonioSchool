<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darasa extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = "madarasa"; # custom class names

    public function students(){
        # TODO: handle relationship between class and students
        $this->hasMany(Student::class);
    }
}

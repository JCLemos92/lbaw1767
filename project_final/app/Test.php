<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $timestamps = false; //Retira as colunas do update at e create at

    protected $fillable = ['email', 'username', 'password', 'name', 'last_name', 'gender', 'country'];
}

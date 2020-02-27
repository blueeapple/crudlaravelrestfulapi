<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'contact', 'gender', 'company', 'position', 'created_at'];
}

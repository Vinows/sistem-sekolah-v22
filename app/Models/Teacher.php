<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable('nip', 'name', 'gender', 'subject', 'phone', 'status')]
#[Table('teachers')]

class Teacher extends Model
{

}

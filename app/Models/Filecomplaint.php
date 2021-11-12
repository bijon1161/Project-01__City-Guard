<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filecomplaint extends Model
{
    use HasFactory;
    public $table="filecomplaint";
    protected $fillable = [
        'name',
        'email',
        'message',
        

    ];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlatOwner extends Model
{
    use HasFactory;

    protected $table = 'flatowner';
    protected $primaryKey = 'id';
    protected $fillable = ['name','address','mobile','photo'];
}

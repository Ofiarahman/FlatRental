<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $table = 'review';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps=false;
    // ['name','address','rname','raddress','status'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket_model extends Model
{
    use HasFactory;
    protected $fillable = ['id','subject', 'message','status','priority'];

    
}

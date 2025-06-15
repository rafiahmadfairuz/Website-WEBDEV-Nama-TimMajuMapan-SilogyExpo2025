<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsahaUser extends Model
{
    /** @use HasFactory<\Database\Factories\UsahaUserFactory> */
    use HasFactory;
    protected $guarded = ['id'];

}

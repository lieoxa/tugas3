<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccUser extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $guarded = ["id"];
}

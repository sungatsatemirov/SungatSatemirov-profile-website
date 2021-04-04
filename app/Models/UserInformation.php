<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $table = 'usersInfo';
    protected $fillable = ['email', 'name', 'surname', 'profile_photo'];
}

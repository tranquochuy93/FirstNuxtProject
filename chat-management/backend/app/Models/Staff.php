<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Staff extends Authenticatable
{
  use Notifiable, HasApiTokens;

  const CREATED_AT = 'created';
  const UPDATED_AT = 'updated';

  protected $table = 'staff';

  protected $fillable = ['name', 'email', 'password', 'role', ];

  protected $hidden = ['password'];
}

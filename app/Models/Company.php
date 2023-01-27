<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function teams(){
        return $this->hasMany(Team::class);
    }

    public function Roles(){
        return $this->hasMany(Role::class);
    }
}
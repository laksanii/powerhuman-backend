<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'icon',
        'company_id'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function employees(){
        return $this->hasMany(Employee::class);
    }
    
}
<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = "role";
     protected $primarykey = 'id';
     public $incrementing = false;
    protected $fillable = [
        'id',
        'role_name',
    ];
    public function User()
    {

        return $this->hasMany(User::class,'role_id');
    }
}

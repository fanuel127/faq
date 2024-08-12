<?php

namespace App\Models;

<<<<<<< Updated upstream
use App\Models\User;
=======
>>>>>>> Stashed changes
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = "role";
<<<<<<< Updated upstream
     protected $primarykey = 'id';
     public $incrementing = false;
    protected $fillable = [
        'id',
        'role_name',
    ];
    public function User()
    {

        return $this->hasMany(User::class,'role_id');
=======
    protected $primarykey = 'id';
    protected $fillable = [
        'roleName',

    ];
    public function user()
    {
        return $this->hasMany(User::class);
>>>>>>> Stashed changes
    }
}

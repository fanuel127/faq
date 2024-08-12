<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "users" ;
    protected $primarykey = "id" ;
    protected $fillable = [
        'firstName',
        'lastName',
        'gender',
        'email',
        'status',
        'password',
        'phoneNumber',
        'email',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
<<<<<<< Updated upstream


    public function Role()
    {

        return $this->belongsTo(Role::class);
    }
    public function Question()
    {

        return $this->hasMany(Question::class);
    }
=======
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Role(){
        return $this->belongsTo(Role::class);
    }
>>>>>>> Stashed changes
}

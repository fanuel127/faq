<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements AuthenticatableContract
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "users";
    protected $primarykey = "id";
    protected $fillable = [
        'firstName',
        'lastName',
        'gender',
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

    // Cacher les attributs de tableau pour ne pas les inclure dans les tableaux de sortie
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Caster les attributs pour qu'ils aient le bon type
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function Role()
    {

        return $this->belongsTo(Role::class);
    }

    public function Users()
    {

        return $this->hasMany(User::class , 'role_id');
    }



    /**
     * Indique si l'utilisateur est actif ou non.
     *
     * @var bool
     */
    protected $attributes = [
        'status' => 0, // 0 = actif, 1 = inactif
    ];

    /**
     * Obtenir l'état de l'utilisateur.
     *
     * @return bool
     */
    public function getIsActiveAttribute()
    {
        return $this->attributes['status'] === 0;
    }

    /**
     * Définir l'état de l'utilisateur.
     *
     * @param  bool  $value
     * @return void
     */
    public function setIsActiveAttribute($value)
    {
        $this->attributes['status'] = $value ? 0 : 1;
    }
}

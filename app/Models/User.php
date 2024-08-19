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
    protected $hidden = [
        'password',

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */


    public function Role()
    {

        return $this->belongsTo(Role::class);
    }
    public function Question()
    {

        return $this->hasMany(Question::class);
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

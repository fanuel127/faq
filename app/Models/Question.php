<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = "questions";
    protected $primarykey = 'id';
    protected $fillable = [
        'questionName',
        'description',
        'category_id',
        'answer',
        'photo',
        'photo2',
        'video',
        'user_id',

    ];
    public function category()
    {
        return $this->belongsTo(Category::class); // Exemple de relation
    }

    // Définir la relation 'questions' (si elle existe)
    public function questions()
    {
        return $this->hasMany(Question::class , 'category_id'); // Exemple d'une relation en cascade
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = "question";
    protected $primarykey = 'id';
    protected $fillable = [
        'questionName',
        'description',
        'category_id',
        'answer',
        'photo',
        'video',
        'user_id',

    ];
    public function category(){

        return $this->belongsTo(Category::class);

}
public function user(){

    return $this->belongsTo(user::class);

}

}


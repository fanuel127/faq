<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
    protected $table = "category";
    protected $primarykey = 'id';
    protected $fillable = [
        'category'
    ];
    public function question(){

        return $this->hasMany(Question::class);

    }
}

=======
    protected $table = "Category";
    protected $primarykey = 'id';
    protected $fillable = [
'category'
    ];
    public function question(){
        return $this->hasMany(Question::class);
    }
}
>>>>>>> Stashed changes

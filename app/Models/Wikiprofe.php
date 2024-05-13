<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Wikiprofe extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'wikiprofes';
    
    protected $fillable = [
        'profesor',
        'nrc',
        'materia',
        'rating',
        'comentario',
        'user_id'
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function profesors()
    {
        return $this->belongsToMany(Profesor::class, 'profesors_wikiprofes');
    }

    public function getForeignKey()
{
    return 'profesor';
}
}
